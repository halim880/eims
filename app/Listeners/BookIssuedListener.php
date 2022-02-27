<?php

namespace App\Listeners;

use App\Events\BookIssuedEvent;
use App\Notifications\BookIssuedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class BookIssuedListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(BookIssuedEvent $event)
    {
        $event->issue->book->decrease();

        $event->issue->student->user->notify(new BookIssuedNotification($event->issue));
    }
}
