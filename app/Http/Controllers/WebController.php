<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Http\Requests\WebRequest;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function index(Web $web)
    {
        return view('admin.web', compact('web'));
    }
    public function updateBackground(WebRequest $request, Web $web)
    {
        @unlink(public_path($web->cover_image));
        $image = $request->file('cover_image')->store('public/web/cover');
        $web->update([
            'cover_image' => Storage::url($image)
        ]);
        return redirect()->route('admin.web.index', 1)->with('background', 'Success change new background !');
    }
    public function updateContent(WebRequest $request, Web $web)
    {
        dd('submitted Content');
    }
}
