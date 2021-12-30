<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        return view('admin.account');
    }
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'password' => 'min:8|nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg,gif|max:5000'
        ]);
        // Image Check
        if ($request->hasFile('image')) {
            @unlink(public_path($user->image));
            $image = $request->file('image')->store('public/member');
            $data['image'] = Storage::url($image);
        }else {
            $data['image'] = $user->image;
        }
        // Password Check
        if ($request->password !== null) {
            $data['password'] = bcrypt($data['password']);
        }else {
            $data['password'] = $user->password;
        }
        $user->update($data);
        return redirect()->route('admin.profile.index')->with('status', 'Success Update Your Profile !!!');
    }
}
