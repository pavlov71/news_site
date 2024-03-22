<?php

namespace App\Listeners;

use App\Events\UserRegistrationEvent;
use App\Jobs\MailRegistrationProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class UserCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistrationEvent $event): void
    {
        MailRegistrationProcess::dispatch($event->user );
    }
}
