<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return Inertia::render('Contact');
    }
}