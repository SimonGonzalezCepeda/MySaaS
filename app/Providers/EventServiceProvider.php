<?php

namespace App\Providers;

use App\Events\UserHasChanged;
use App\Events\UserLoged;
use App\Listeners\UserCacheForget;
use App\Listeners\UserUpdateLastLogin;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        UserLoged::class => [
            UserUpdateLastLogin::class,
        ],
        UserHasChanged::class => [
            UserCacheForget::class,
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
