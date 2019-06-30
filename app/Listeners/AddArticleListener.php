<?php

namespace App\Listeners;

use App\Events\onAddArticleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class AddArticleListener
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
     * @param  onAddArticleEvent  $event
     * @return void
     */
    public function handle(onAddArticleEvent $event)
    {
        //
//        $event->user_name;
//        $event->article_name;
        Log::info('Article save:', [$event->user_name=>$event->article_name]);
    }
}
