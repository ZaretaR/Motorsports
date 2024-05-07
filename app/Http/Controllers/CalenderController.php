<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function calender() {
        return Inertia::render('Calender');
    }
}