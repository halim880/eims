<?php

namespace App\Listeners;

use App\Events\StudentIsRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegistrationCompletedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StudentIsRegisteredEvent  $event
     * @return void
     */
    public function handle(StudentIsRegisteredEvent $event)
    {

        // Mail::to($event-->email)->send(new StudentRegistrationFormSubmitted());
    }
}
