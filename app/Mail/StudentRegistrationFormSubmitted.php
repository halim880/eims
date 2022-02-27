<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentRegistrationFormSubmitted extends Mailable
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
        $this->title = 'Student Registration';
        $this->body = 'Your application is recieved. Please! wait for the approval';
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->subject('Student Application')->view('emails.student.form_submitted');
    }
}
