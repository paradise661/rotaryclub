<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::oldest('order')->get();
        return view('frontend.message.index', compact('messages'));
    }

    public function show($slug)
    {
        $message = Message::where('slug', $slug)->first();
        $moremessages = Message::where('slug', '!=', $slug)->limit(4)->get();
        return view('frontend.message.show', compact('message', 'moremessages'));
    }
}
