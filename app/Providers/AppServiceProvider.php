<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //
    }
}
class RouteServiceProvider extends ServiceProvider
{
    // ...

    public const admin = '/admin/dashboard'; // يمكن تغيير المسار حسب الحاجة

    // ...
}