<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SystemInfo;

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
        // Fetch system information from the database
      /*   $app_name = SystemInfo::where('meta_name', 'app_name')->first()->meta_value ?? 'Default App Name';
        $app_version = SystemInfo::where('meta_name', 'app_version')->first()->meta_value ?? '1.0';
        $app_logo = SystemInfo::where('meta_name', 'app_logo')->first()->meta_value ?? 'path/to/default/logo.png';

        // Share the data with all views
        $data = [
            'app_name' => $app_name,
            'app_version' => $app_version,
            'app_logo' => $app_logo
        ];
        View::share('aapData', $data); */
    }
}
