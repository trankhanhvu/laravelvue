<?php

namespace App\Listeners;

use App\Events\RegisterSuccessfull;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailVerify implements ShouldQueue
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
     * @param  RegisterSuccessfull  $event
     * @return void
     */
    public function handle(RegisterSuccessfull $event)
    {
        $data = [
            'name' => $event->user->name,
            'register_token' => $event->user->register_token
        ];
        
        Mail::send('frontend.pages.user.confirm_email_verification', $data, function ($message) use ($event) {
            $message->to($event->user->email, 'Visitor');
            $message->sender('boykunis90@gmail.com', 'John Doe');
            $message->subject('Verify email !!!');
        });

    }
}
