<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

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
        Blade::directive('setting', function ($expression) {
            return "<?php echo e(
                Cache::rememberForever('settings.all', function () {
                    return \\App\\Models\\Setting::pluck('value', 'key');
                })->get({$expression})
            ); ?>";
        });
    }
}
