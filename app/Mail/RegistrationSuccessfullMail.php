<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationSuccessfullMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->title = 'Registration is successful';
        $this->body = 'Your registration is Successfully completed';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Student Application');
    }
}
