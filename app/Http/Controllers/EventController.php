<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date')->get();
        
        return view('events.index', compact('events'));
    }
    
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
    
    public function create()
    {
        return view('events.create');
    }
    
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'body' => 'required'
        ]);
        Event::create(request(['title','date', 'time', 'body', 'public']));
        /*
        $event = new Event;
        
        $event->title = request('title');
        $event->date = request('date');
        $event->time = request('time');
        $event->body = request('body');
        $event->public = request('public');
        
        
        $event->save();
        */
        return redirect('/');
    }
}
