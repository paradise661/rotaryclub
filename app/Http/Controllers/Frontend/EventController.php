<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(12);
        return view('frontend.event.index', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $moreevents = Event::where('slug', '!=', $slug)->limit(4)->get();
        return view('frontend.event.show', compact('event', 'moreevents'));
    }
}
