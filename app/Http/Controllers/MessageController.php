<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
    	$messages = Message::latest()->paginate(10);
    	return view('admin.message.index', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('admin.message.show', compact('message'));
    }

    public function send(Message $message, Request $request)
    {
        
    }
}
