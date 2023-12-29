<?php

use Illuminate\Support\Facades\Route;

use Phpсatсom\LaravelPermissionGui\Http\Controllers\PermissionGuiController;
use Phpсatсom\LaravelPermissionGui\Http\Controllers\RoleController;
use Phpсatсom\LaravelPermissionGui\Http\Controllers\UserController;

use App\Http\Controllers\Controller;

Route::group([
        'as' => 'phpcatcom.',
        'prefix' => 'phpcatcom',
    ]
    , function () {
        Route::group([
                'as' => 'permission.',
                'prefix' => 'permission',
            ]
            , function () {

                Route::get('', function(){

//                    var_dump(Controller) ;
                    dd(    ''.__FILE__ . ' ' . __LINE__.'' );
            });

//                Route::get('', [PermissionGuiController::class, 'showIndex'])
//                    ->name('index');

                Route::resource('role', RoleController::class)
                    ->only('index', 'store');

                Route::resource('user', UserController::class);

                Route::get('places', [PermissionGuiController::class, 'showPlaces'])
                    ->name('places');
                Route::get('setter', [PermissionGuiController::class, 'showSetter'])
                    ->name('setter');

            });
    });
