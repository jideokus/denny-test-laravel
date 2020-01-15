<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    function showEvents(Request $request){
        $events = Event::all();
        return view('events')->with([
            'events'=>$events,
        ]);
    }
    function createEvent(Request $request){
        return view('create-event');
    }
    function submitEvent(Request $request){
        $event_name = $request->get('name');
        $event_location = $request->get('location');
        $event_date = $request->get('date');
        $user = \Auth::user();

        $event = Event::create([
            'name'=>$event_name,
            'date'=>$event_date,
            'location'=>$event_location,
            'user_id'=>$user->id,
        ]);
        

        return redirect()->route('events')->with('status', 'Event created!');;
    }
}
