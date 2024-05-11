<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function aanmelden()
    {
        return view('profile.aanmeld-section');
    }
}