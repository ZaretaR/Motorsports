<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended(route('home'));
        }

        return back()->withErrors(['username' => 'We kunnen je niet aanmelden met deze gegevens.']);
    }

    public function register()
    {
        return view('auth.aanmelden');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->save();

        return redirect()->intended(route('profile'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->intended(route('profile'));
    }
}
