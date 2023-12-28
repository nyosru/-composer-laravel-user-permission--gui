<?php

namespace Phpcatcom\Permission\Gui;

//use PhpCatCom\Middleware\AuthRoles;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class LaravelPermissionGuiServiceProvider extends ServiceProvider
//class LaravelPermissionGuiServiceProvider extends LaravelPermissionServiceProvider
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

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'phpcatcom/permission_gui');

        require_once(__DIR__ . '/../Router/web.php');
        require_once(__DIR__ . '/../Router/api.php');

    }

    public function register()
    {
    }
}
