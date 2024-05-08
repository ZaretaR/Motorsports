<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function verzenden(Request $request){
        $validated = $request->validate([
            'naam' => 'required',
            'voornaam' => 'required',
            'email' => 'required|email',
            'bericht' => 'required|min:10'
        ]);

        Mail::to('zareta.rasaeva@gmail.com')->send(new ContactMessageSent($validated));

        return back()->with('status', 'Uw bericht is verstuurd');
    }
}