<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function checkLoggedIn(Request $request)
    {
        $user = $request->user();

        if($user) {
            return response()->json(['loggedIn' => true]);
        } else {
            return response()->json(['loggedIn' => false]);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        if(auth()->attempt($request->only('email', 'password'))) {
            return response()->json(auth()->user());
        }
        return response()->json(['message' => 'Foute gegevens']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'adress' => 'required',
            'phone_number' => 'required',
            'house_number' =>'required',
            'municipality_id' =>'required',
            'insurance_id' =>'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'adress' => $request->adress,
            'phone_number' => $request->phone_number,
            'house_number' => $request->house_number,
            'municipality_id' => $request->municipality_id,
            'insurance_id' => $request->insurance_id,
        ]);

        return response()->json($user);
    }
}