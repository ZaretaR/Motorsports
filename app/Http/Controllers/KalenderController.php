<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;

class KalenderController extends Controller
{
    public function kalender()
    {
        return view('kalender');
    }
}