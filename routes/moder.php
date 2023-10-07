<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:Moder']], function () {
    Route::get('moder', function(){
        return 'moderador';
    })->name('moder.index');
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
});