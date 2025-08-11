<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $data = Setting::pluck('value', 'key')->toArray();
        View::share('settings', $data);

        $data2 = SocialMedia::get();
        View::share('socialmedias', $data2);

        Paginator::useBootstrap();
    }
}
