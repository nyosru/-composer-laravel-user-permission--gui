<?php

use Illuminate\Support\Facades\Route;

use \Phpcatcom\Permission\Gui\Controllers\PermissionGuiController;
use \Phpсatсom\Permission\Gui\Controllers\RoleController;
use \Phpcatcom\Permission\Gui\Controllers\UserController;

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

                Route::get('', [PermissionGuiController::class, 'showIndex'])
                    ->name('index');

                Route::resource('role', RoleController::class)
                    ->only('index', 'store');

                Route::resource('user', UserController::class);

                Route::get('places', [PermissionGuiController::class, 'showPlaces'])
                    ->name('places');
                Route::get('setter', [PermissionGuiController::class, 'showSetter'])
                    ->name('setter');

            });
    });
