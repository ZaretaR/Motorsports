<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function myCalendar()
    {
        return view('kalender');
    }

    public function addEvent(Request $request)
    {
        $name = $request->input('name');
        $range = $request->input('rangepick');
        $dates = explode(' - ', $range);
        $start_datetime = Carbon::parse($dates[0]);
        $end_datetime = Carbon::parse($dates[1]);

        $event = new Event();
        $event->name = $name;
        $event->start = $start_datetime;
        $event->end = $end_datetime;
        $event->save();
        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    public function getEvents(Request $request)
    {
        $events = Event::whereDate('start', '>=', $request->start)
        ->whereDate('end', '<=', $request->end)
        ->get(['id', 'name', 'start', 'end']);

         return response()->json($events);
    }

    public function updateevent(Request $request)
    {
        $name = $request->input("editname");
        $eventid = $request->input("eventid");
        $range2 = $request->input("rangepick2");
        $dates = explode(' - ', $range2);
        $start_datetime = Carbon::parse($dates[0]);
        $end_datetime = Carbon::parse($dates[1]);
        $event = Event::where('id','=',$eventid)->first();
        $event->name = $name;
        $event->start = $start_datetime;
        $event->end = $end_datetime;
        $event->save();
        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    public function deleteevent(Request $request)
    {
        $id = $request->id;
        DB::table("events")->where('id',"=",$id)->delete();
        return response()->json([
            'success' => true
        ]);
    }
}