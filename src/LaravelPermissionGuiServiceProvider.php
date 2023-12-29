<?php

namespace Phpcatcom\Permission\Gui;

use PhpCatCom\Middleware\AuthRoles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelPermissionGuiServiceProvider extends ServiceProvider
{
    public function boot(
//        Router $router
    )
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

        require_once(__DIR__ . '/routers.php');

    }

    public function register()
    {
    }

}
