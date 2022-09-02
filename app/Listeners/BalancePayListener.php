<?php

namespace App\Listeners;

use App\Events\UserBalancePayedEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BalancePayListener
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
     * @param  \App\Events\UserBalancePayedEvent  $event
     * @return void
     */
    public function handle(UserBalancePayedEvent $event)
    {
        $data = $event->requestData;
        $user = User::where('email', $data['P_EMAIL'])->first();
        $referral = User::find($user->referral)->first();
        dd($referral);
    }
}