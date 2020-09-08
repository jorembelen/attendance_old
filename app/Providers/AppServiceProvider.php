<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           // 'key' => 'value'
           $settings = Setting::all('key', 'value')
           ->keyBy('key')
           ->transform(function ($setting) {
               return $setting->value;
           })
           ->toArray();
       config([
          'settings' => $settings
       ]);
  
       config(['app.name' => config('settings.app_name')]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
