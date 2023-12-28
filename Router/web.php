<?php

use Illuminate\Support\Facades\Route;

use \Phpcatcom\Permission_gui\Controllers\PermissionGuiController;
use \Phpсatсom\Permission_gui\Controllers\RoleController;
use \Phpcatcom\Permission_gui\Controllers\UserController;

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
                dd(''.__FILE__ . ' ' . __LINE__.'' );
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
