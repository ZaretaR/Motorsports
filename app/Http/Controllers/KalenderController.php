<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;

class KalenderController extends Controller
{
    /*
    public function kalender()
    {
        return view('kalender');
    }
    */

    public function getEvents()
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json(['message'=>'Evenement succesvol verwijderd.']);
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update([
            'start'=>Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
            'end'=>Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);

        return response()->json(['message'=>'Evenement succesvol bijgewerkt.']);
    }

    public function eventResize(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $newEndDate = Carbon::parse($request->input('end_date'))->setTimezone('UTC');
        $event->update('end', $newEndDate);

        return response()->json(['message'=>'Evenement succesvol bijgewerkt.']);
    }

    public function search(Request $request)
    {
        $searchText
    }
}
