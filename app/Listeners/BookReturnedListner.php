<?php

namespace App\Listeners;

use App\Events\BookReturnedEvent;
use App\Notifications\BookReturnedNotification;

class BookReturnedListner
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

    public function handle(BookReturnedEvent $event)
    {
        $event->issue->book->increase();
        $event->issue->student->user->notify(new BookReturnedNotification($event->issue));
    }
}
