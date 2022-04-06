<?php

namespace App\Notifications;

use App\Models\Hostel\HostelNotice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HostelNotification extends Notification
{
    use Queueable;

    public HostelNotice $notice;


    public function __construct(HostelNotice $notice)
    {
        $this->notice = $notice;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'id'=> $this->notice->id,
            'title'=> $this->notice->title,
            'content'=> $this->notice->content,
        ];
    }
}
