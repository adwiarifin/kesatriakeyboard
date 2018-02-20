<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Mail\MessageReply;
use Mail;

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
        $reply = $request->reply;
        $name = $message->name;
        $email = $message->email;

        // Mail::send('admin.email.send', compact('name', 'reply'), function($message){
        //     $message->from('info@kesatriakeyboard.com', 'Kesatria Keyboard');
        //     $message->to($message->email);
        // });

        Mail::to($email)->send(new MessageReply($name, $reply));

        return response()->json(['message' => 'Request Completed']);
    }
}
