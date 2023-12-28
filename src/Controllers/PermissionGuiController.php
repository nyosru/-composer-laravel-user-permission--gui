<?php

namespace Phpсatсom\Permission_gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Phpcatcom\Permission\Models\Permission as Permission;

//if( class_exists('PermissionGuiController'))
//    dd('123123');

//if( !class_exists('Phpсatсom\Permission\Gui\Controllers\PermissionGuiController')) {
//    dd('123177723');

//class PermissionController extends BigControllers
    class PermissionGuiController extends Controller
    {

        public static $in = ['menu' => [
            [
                'route' => 'phpcatcom.permission.index',
                'title' => 'Управление',
                'template' => 'phpcatcom/permission-gui::index'
            ],
            [
                'route' => 'phpcatcom.permission.user.index',
                'title' => 'Пользователи',
                'template' => 'phpcatcom/permission-gui::users'
            ],
            [
                'route' => 'phpcatcom.permission.role.index',
                'title' => 'Роли',
                'template' => 'phpcatcom/permission-gui::roles'
            ],
            [
                'route' => 'phpcatcom.permission.places',
                'title' => 'Места',
                'template' => 'phpcatcom/permission-gui::places'
            ],
            [
                'route' => 'phpcatcom.permission.setter',
                'title' => 'Назначение ролей пользователям',
                'template' => 'phpcatcom/permission-gui::setter'
            ],
        ]];


        public function showIndex()
        {
            return view('phpcatcom/permission-gui::index', self::$in);
        }

        public function showRoles()
        {
            return view('phpcatcom/permission-gui::roles', self::$in);
        }

        public function showSetter()
        {
            return view('phpcatcom/permission-gui::setter', self::$in);
        }

        public function showPlaces()
        {

            self::$in['places'] = Permission::all();

            return view('phpcatcom/permission-gui::places', self::$in);
        }

    }
//}
