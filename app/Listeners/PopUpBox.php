<?php

namespace VirtualHealth\Listeners;

use VirtualHealth\Events\EventTrigger;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PopUpBox
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
     * @param  EventTrigger  $event
     * @return void
     */
    public function handle(EventTrigger $event)
    {
        //
    }
}
