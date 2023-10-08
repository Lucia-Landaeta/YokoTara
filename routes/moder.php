<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:Moder']], function () {
    Route::get('moder', function(){
        return 'moderador';
    })->name('moder.index');
});