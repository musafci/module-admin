<?php

namespace App\Modules\Customer\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Interface and Repository in here
        // You must place Interface in first place
        // If you dont, the Repository will not get readed.
        $this->app->bind(
            'App\Modules\Customer\Interfaces\CustomerInterface',
            'App\Modules\Customer\Repositories\CustomerRepostitory'
        );
    }
}