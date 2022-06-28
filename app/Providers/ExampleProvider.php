<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data = [
            'a' => 5,
            'b' => 10,
            'c' => 15
        ];

        view()->share('number', $data);

    }
}
