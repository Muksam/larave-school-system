<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('dashboard.pages.event.show-event',compact('events'));
    }

    public function create() {
        return view('dashboard.pages.event.add-event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location'=>'required',
            'date'=>'required',
        ]);
  
        $event = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/event/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $event['image'] = "$profileImage";
        }
    
        Event::create($event);
     
        return redirect()->route('events.index')
                        ->with('success','Event created successfully.');
    }


    public function edit(Event $event) {
        $event = Event::find($event)->first();
        return view('dashboard.pages.event.edit-event',compact('event'));
    }

    public function update(Request $request, Event $event) {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location'=>'required',
            'date'=>'required',
        ]);
  
        $eventData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/event/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $eventData['image'] = "$profileImage";
        }else{
            unset($eventData['image']);
        }
          
        $event->update($eventData);
        return redirect()->route('events.index')
                        ->with('success','Event updated successfully.');

    }

    public function destroy(Event $event) {
        $event->delete();
        return redirect()->route('events.index')
                        ->with('success','Event deleted successfully.');

    }
    
}
