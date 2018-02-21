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

    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $reply = $request->reply;

        // Mail::send('admin.email.send', compact('name', 'reply'), function($message){
        //     $message->from('info@kesatriakeyboard.com', 'Kesatria Keyboard');
        //     $message->to($message->email);
        // });

        Mail::to($email)->send(new MessageReply($name, $reply));

        // info message
        session()->flash('message', 'Message has been replied');

        return redirect('/admin/messages');
    }
}
