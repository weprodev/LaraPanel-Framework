<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'namespace' => config('larapanel.namespace.user.admin'),
        'prefix' => config('larapanel.path.admin', 'lp-admin'),
        'as' => 'lp.admin.',
        'middleware' => ['web', 'auth:web'],
    ],
    function () {

        Route::group(
            [
                'prefix' => 'users', 'as' => 'user.',
                'middleware' => ['permission:lp.admin.user.index'],
            ],
            function () {
                // lp.admin.user.index
                Route::get('/', 'UsersController@index')->name('index')
                    ->middleware('permission:lp.admin.user.index');
                // lp.admin.user.create
                Route::get('/create', 'UsersController@create')->name('create')
                    ->middleware('permission:lp.admin.user.create');
                // lp.admin.user.create
                Route::post('/create', 'UsersController@store')->name('create')
                    ->middleware('permission:lp.admin.user.create');
                // lp.admin.user.edit
                Route::get('/edit/{userUuid}', 'UsersController@edit')->name('edit')
                    ->middleware('permission:lp.admin.user.edit');
                // lp.admin.user.edit
                Route::put('/edit/{userUuid}', 'UsersController@update')->name('edit')
                    ->middleware('permission:lp.admin.user.edit');
                // lp.admin.user.delete
                Route::delete('/delete/{userUuid}', 'UsersController@delete')->name('delete')
                    ->middleware('permission:lp.admin.user.delete');
            }
        );

        Route::group(
            [
                'prefix' => 'roles', 'as' => 'role.',
                'middleware' => ['permission:lp.admin.role.index'],
            ],
            function () {
                // lp.admin.role.index
                Route::get('/', 'RolesController@index')->name('index')
                    ->middleware('permission:lp.admin.role.index');
                // lp.admin.role.create
                Route::get('/create', 'RolesController@create')->name('create')
                    ->middleware('permission:lp.admin.role.create');
                // lp.admin.role.create
                Route::post('/create', 'RolesController@store')->name('create')
                    ->middleware('permission:lp.admin.role.create');
                // lp.admin.role.edit
                Route::get('/edit/{roleId}', 'RolesController@edit')->name('edit')
                    ->middleware('permission:lp.admin.role.edit');
                // lp.admin.role.edit
                Route::put('/edit/{roleId}', 'RolesController@update')->name('edit')
                    ->middleware('permission:lp.admin.role.edit');
                // lp.admin.role.delete
                Route::delete('/delete/{roleId}', 'RolesController@delete')->name('delete')
                    ->middleware('permission:lp.admin.role.delete');
            }
        );

        Route::group(
            [
                'prefix' => 'permissions', 'as' => 'permission.',
                'middleware' => ['permission:lp.admin.permission.index'],
            ],
            function () {
                // lp.admin.permission.index
                Route::get('/', 'PermissionsController@index')->name('index')
                    ->middleware('permission:lp.admin.permission.index');
                // lp.admin.permission.create
                Route::get('/create', 'PermissionsController@create')->name('create')
                    ->middleware('permission:lp.admin.permission.create');
                // lp.admin.permission.create
                Route::post('/create', 'PermissionsController@store')->name('create')
                    ->middleware('permission:lp.admin.permission.create');
                // lp.admin.permission.edit
                Route::get('/edit/{permissionId}', 'PermissionsController@edit')->name('edit')
                    ->middleware('permission:lp.admin.permission.edit');
                // lp.admin.permission.edit
                Route::put('/edit/{permissionId}', 'PermissionsController@update')->name('edit')
                    ->middleware('permission:lp.admin.permission.edit');
                // lp.admin.permission.delete
                Route::delete('/delete/{permissionId}', 'PermissionsController@delete')->name('delete')
                    ->middleware('permission:lp.admin.permission.delete');
            }
        );

        Route::group(
            [
                'prefix' => 'groups', 'as' => 'group.',
                'middleware' => ['permission:lp.admin.group.index'],
            ],
            function () {
                // lp.admin.group.index
                Route::get('/', 'GroupsController@index')->name('index')
                    ->middleware('permission:lp.admin.group.index');
                // lp.admin.group.create
                Route::get('/create', 'GroupsController@create')->name('create')
                    ->middleware('permission:lp.admin.group.create');
                // lp.admin.group.create
                Route::post('/create', 'GroupsController@store')->name('create')
                    ->middleware('permission:lp.admin.group.create');
                // lp.admin.group.edit
                Route::get('/edit/{groupId}', 'GroupsController@edit')->name('edit')
                    ->middleware('permission:lp.admin.group.edit');
                // lp.admin.group.edit
                Route::put('/edit/{groupId}', 'GroupsController@update')->name('edit')
                    ->middleware('permission:lp.admin.group.edit');
                // lp.admin.group.delete
                Route::delete('/delete/{groupId}', 'GroupsController@delete')->name('delete')
                    ->middleware('permission:lp.admin.group.delete');
            }
        );
    }
);

Route::group(
    [
        'namespace' => config('larapanel.namespace.panel.dashboard'),
        'prefix' => config('larapanel.path.admin', 'lp-admin'),
        'as' => 'lp.dashboard.',
        'middleware' => ['web', 'auth:web'],
    ],
    function () {

        // lp.dashboard.panel
        Route::get('/', 'DashboardController@index')->name('panel')
            ->middleware('permission:lp.dashboard.panel');
    }
);
