<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

class Events extends Controller
{
    public function Events()
    {
        $event = Event::all();
        return view('admin.events.events')->with('event' , $event);
    }

    public function displayEvents()
    {
        $events = Event::all();
        return view('frontend.upcomingevents')->with('events' , $events);
    }

    public function CreateEvent()
    {
        return view('admin.events.addevent');
    }

    public function SaveEvent(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'date' => 'required',
            'time' => 'required',
            'day' => 'required',
            'venue' => 'required',
            'charges' => 'required'
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $events = new Event;
        $events->title = $request->input('title');
        $events->date = $request->input('date');
        $events->start_time = $request->input('time');
        $events->day = $request->input('day');
        $events->venue = $request->input('venue');
        $events->charges = $request->input('charges');
        $events->image = 'images/'.$imageName;
        $events->save();

        return redirect()->to('admin/events/list')->with('success' , 'Event Successfully Configured');
    }

    public function EditEvent($id)
    {
        $event = Event::find($id);
        return view('admin.events.editevent')->with('event',$event);
    }
    
    public function UpdateEvent(Request $request , $id)
    {
        $request->validate([
            'title' =>'required',
            'date' => 'required',
            'time' => 'required',
            'day' => 'required',
            'venue' => 'required',
            'charges' => 'required'
        ]);

        $events = Event::find($id);
        $events->title = $request->input('title');
        $events->date = $request->input('date');
        $events->start_time = $request->input('time');
        $events->day = $request->input('day');
        $events->venue = $request->input('venue');
        $events->charges = $request->input('charges');

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $events->image = 'images/'.$imageName;
        $events->save();
        return redirect()->to('admin/events/list')->with('success' , 'Event Successfully Updated');
    }

    public function DeleteEvent($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->to('admin/events/list')->with('failed' , 'Event Deleted');
    }
}
