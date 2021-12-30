<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::where('verify', 'true')->whereNotNull('verified_at')->get();
        return view('admin.users.index', compact('members'));
    }
    public function edit(Member $member)
    {
        return view('admin.users.show', compact('member'));
    }
    public function update(MemberRequest $request, Member $member)
    {
        $user = User::where('username', $member->username)->first();
        $request->validate([
            'username' => 'required|unique:members,username,' . $member->id,
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/member');
            $data['image'] = Storage::url($image);
        }else {
            $data['image'] = $member->image;
        }
        if ($request->password !== null) {
            $data['password'] = bcrypt($data['password']);
        }else {
            $data['password'] = $user->password;
        }
        $user->update([
            'image' => $data['image'],
            'username' => $data['username'],
            'password' => $data['password']
        ]);
        $member->update($data);
        return redirect()->route('admin.member.index')->with('status', 'Success update user !');
    }
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin.member.index')->with('status', 'Success delete the member');
    }
    public function userVerify()
    {
        $users = Member::where('verify', 'false')->get();
        return view('admin.users.verify', compact('users'));
    }
    public function userVerifyPost(Member $member)
    {
        User::create([
            'name' => $member->name,
            'username' => $member->username,
            'password' => $member->password,
            'level' => 'user'
        ]);
        $member->update([
            'verify' => 'true',
            'verified_at' => date(now())
        ]);
        return redirect()->route('admin.member.verify')->with('status', 'Success add new user (' . $member->name . ')');
    }
    public function userVerifyDelete(Member $member)
    {
        if ($member->image !== null) {
            # code...
            @unlink(public_path($member->image));
        }
        $member->delete();
        return redirect()->route('admin.member.verify')->with('status', 'Success delete the user');
    }
}
