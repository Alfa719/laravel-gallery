<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->level;
        if ($user === 'admin') {
            return redirect()->route('admin.dashboard')->with('status', 'Welcome Admin '.Auth::user()->name .' To Dashboard');
        }
        return view('home');
    }
}
