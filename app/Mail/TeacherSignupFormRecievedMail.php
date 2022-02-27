<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherSignupFormRecievedMail extends Mailable
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
        $this->title = 'Teacher Signup';
        $this->body = 'Your application is recieved. Please! wait for the approval';
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->subject('Teacher Application')->view('emails.teacher.request_recieved');
    }
}
