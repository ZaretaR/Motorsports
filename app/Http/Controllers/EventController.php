<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function myCalendar()
    {
        return view('kalender');
    }
}