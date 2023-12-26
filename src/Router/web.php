<?php

use Illuminate\Support\Facades\Route;

use \PhpCatCom\Controllers\PermissionController;
use \PhpCatCom\Controllers\RoleController;

//$in = ;
//['menu' => [
//    [
//        'route' => 'index',
//        'title' => 'Управление',
//        'template' => 'phpcatcom/permission-gui::index'
//    ],
//    [
//        'route' => 'roles',
//        'title' => 'Роли',
//        'template' => 'phpcatcom/permission-gui::roles'
//    ],
//    [
//        'route' => 'places',
//        'title' => 'Места',
//        'template' => 'phpcatcom/permission-gui::places'
//    ],
//]];

Route::group([
        'as' => 'phpcatcom.permission.',
//        'domain' => (env('APP_ENV', 'x') == 'local') ? 'ar.php-cat.local' : 'ar.php-cat.com'
//        ,
//        'middleware' => 'auth.role',
////        'role' => ['admin', 'customer'],
//        'role' => ['admin'],
    ]
    , function () {

        Route::get('phpcat/permission', [PermissionController::class, 'showIndex'])
            ->name('index');

//        Route::get('phpcat/permission/roles', [PermissionController::class, 'showRoles'])
//            ->name('roles');
        Route::resource('phpcat/permission/role', RoleController::class )
//            ->name( 'index', 'role')
        ;

        Route::get('phpcat/permission/places', [PermissionController::class, 'showPlaces'])
            ->name('places');


        Route::get('phpcat/permission/setter', [PermissionController::class, 'showSetter'])
            ->name('setter');

    });


//$d = function () {
////    Route::view('/show2', 'ar.item')->name('show2');
////    Route::view('/list1', 'ar.list1')->name('list1');
////
////    Route::view('/tenant', 'ar.tenants')->name('tenant');
////    Route::view('/pays', 'ar.pays')->name('pays');
////    Route::view('/item', 'ar.item')->name('item');
////    Route::view('/group', 'ar.group')->name('group');
////    Route::view('/', 'ar.item')->name('index');
//////    Route::get('/', News::class)->name('index');
////
//////    Route::get('services', News::class)->name('services');
//////    // Route::get('/', function () { return view('phpcat.index'); });
//    Route::get('phpcat/permission',function () {
////        return view('phpcat.index');
//return response(200, 'good' );
//    } );

////////    Route::get('news', News::class)->name('news');
////////    Route::get('torrent', News::class)->name('torrent');
////////    Route::get('money', News::class)->name('money');
//////    // Route::get('{.*}', News::class)->name('other');

////    Route::fallback(function () {
////        return redirect('/');
////    });
//};

//$inRoute = [
//    [
//        'as' => 'phpcat_com.permission',
////        'domain' => (env('APP_ENV', 'x') == 'local') ? 'ar.php-cat.local' : 'ar.php-cat.com'
////        ,
////        'middleware' => 'auth.role',
//////        'role' => ['admin', 'customer'],
////        'role' => ['admin'],
//    ]
//];

//foreach ($inRoute as $i) {
//    Route::group($i, $d);
//}

////Route::group([
//////    'as' => 'phpcat.',
////    'domain' => 'php-cat.com'
////], $d);

////Route::group([
//////    'as' => 'phpcat.',
////    'domain' => 'livewire.php-cat.com'
////], $d);


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
