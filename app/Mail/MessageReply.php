<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReply extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $reply;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $reply)
    {
        $this->name = $name;
        $this->reply = $reply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('admin.email.send');
    }
}
