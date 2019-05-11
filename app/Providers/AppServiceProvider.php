<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $categories = Category::all();

        $colors = [
            '2ebd59',
            'fb868f',
            '00dcea',
            '005eea',
            '1cd566',
            '37adff',
            '3b42ff',
            'ec5252',
            'ff562f',
            'ffbf13',
            '536dfe',
            '0dacff',
            '8828ff'
        ];

        $background = [
            '536dfe',
            'fe5367',
            '7ffe53'
        ];

        View::share([
            'categories' => $categories,
            'colors'     => $colors,
            'background' => $background
        ]);
    }
}
