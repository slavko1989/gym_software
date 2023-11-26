<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notification\MemberCreateNotification;
use Auth;
use App\Models\User;

class SendNewNotification
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
    public function handle($event)
    {
         {
        $admins = User::whereHas('role', function ($query) {
                $query->where('id', 1);
            })->get();

        Notification::send($admins, new MemberCreateNotification($event->member));
    }
    }
}
