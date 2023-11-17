<?php

use App\Http\Controllers\Moder\CaseController;
use App\Http\Controllers\Moder\NoticeController;
use App\Http\Controllers\moder\RecordController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:Moder']], function () {
    Route::get('moder', function(){
        return 'moderador';
    })->name('moder.index');
});
//Casos
Route::group(['middleware' => ['can:showCase']], function () {
    Route::get('cases',[CaseController::class,'index'])->name('cases.index');
});
//Avisos
Route::group(['middleware' => ['can:showNotice']], function () {
    Route::get('notice',[NoticeController::class,'index'])->name('notice.index');
});
// Registros
Route::group(['middleware' => ['can:showNotice']], function () {
    Route::get('records/{id}',[RecordController::class,'index'])->name('records.index');
    Route::get('records/show/{record}',[RecordController::class,'show'])->name('records.show');
});

