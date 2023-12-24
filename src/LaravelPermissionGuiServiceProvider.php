<?php

namespace PhpCatCom;

use PhpCatCom\Middleware\AuthRoles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

//class LaravelPermissionGuiServiceProvider extends ServiceProvider
class LaravelPermissionGuiServiceProvider extends LaravelPermissionServiceProvider
{
    public function boot(Router $router)
    {

//        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
//
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                Commands\PermissionsGenerate::class,
//                Commands\PermissionsClear::class,
//            ]);
//        }
//
//        $router->aliasMiddleware('auth.role', AuthRoles::class);

        require_once (__DIR__.'/Router/web.php');
        require_once (__DIR__.'/Router/api.php');

//        Route::view('/7777777', 'ar.item22' )->name('show2333');

//        $this->routes(function (): void {
//            Route::group(base_path('vendor/phpcatcom/laravel-permission/src/router.php'));
//
////            Route::middleware('api')
////                ->group(base_path('routes/api.php'));
//
////            Route::middleware('api')
////                ->group(base_path('routes/resource/catalog.php'));
////
////            Route::middleware('api')
////                ->group(base_path('routes/resource/orders.php'));
////
////            Route::middleware('api')
////                ->group(base_path('routes/resource/payments.php'));
////
////            Route::middleware('api')
////                ->group(base_path('routes/resource/deliveries.php'));
//        });

    }

    public function register()
    {
    }
}
