<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Teacher;
use Illuminate\Support\Facades\Auth;


class studentSubscribeNotification extends Notification
{
    use Queueable;

    protected $Teacher;


    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($Teacher)
    {
        $this->Teacher = $Teacher;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        
            
              return Auth::guard('teacher')->user()->name.'('.Auth::guard('teacher')->user()->email.') is send request for Subcourse';
        
        
    }
}
