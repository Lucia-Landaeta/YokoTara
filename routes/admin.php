<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;

Route::get('admin',[HomeController::class,'index'])->name('admin.index');
Route::get('admin/roles',[RoleController::class,'index'])->name('admin.roles.index');