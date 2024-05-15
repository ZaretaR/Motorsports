<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FullCalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Event::where('start', '>=', $request->start)
                ->where('end', '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('full-calender');
    }

    public function action(Request $request)
    {
        if($request->ajax())
        {
            if($request->type == 'toevoegen')
            {
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);
                return response()->json($event);
            }

            if($request->type == 'bijwerken')
            {
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);
                return response()->json($event);
            }

            if($request->type == 'verwijderen')
            {
                $event = Event::find($request->id)->delete();
                return response()->json($event);
            }
        }
    }
}