<?php

namespace App\Providers;
   
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
   
class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot()
    {
        $this->removeIndexFromUrl();
   
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
  
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected function removeIndexFromUrl()
    {
        if (Str::contains(request()->getRequestUri(), '/index.php/')) {
            $url = str_replace('index.php/', '', request()->getRequestUri());
   
            if (strlen($url) > 0) {
                header("Location: $url", true, 301);
                exit;
            }
        }
    }
   
}
