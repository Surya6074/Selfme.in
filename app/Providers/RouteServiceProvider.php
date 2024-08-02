<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\Models\User;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Bind the 'user' parameter using the username attribute
        Route::bind('user', function ($value) {
            return User::where('username', $value)->firstOrFail();
        });

        parent::boot();
    }

    // Other methods...
}
