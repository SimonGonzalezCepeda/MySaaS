<?php

namespace App\Providers;

use App;
use App\Profile;
use App\ProfileHTML;
use Illuminate\Support\ServiceProvider;

class ProfileProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       App::bind(Profile::class, ProfileHTML::class);
    }
}
