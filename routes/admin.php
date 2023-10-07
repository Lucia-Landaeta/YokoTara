<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => ['role:Admin']], function () {
    Route::redirect('admin', 'admin/roles')->name('admin.index');
    Route::get('admin/roles', [RoleController::class, 'index'])->name('admin.roles.index');
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
});
