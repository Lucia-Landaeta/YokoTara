<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Moder\CaseController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',HomeController::class)->name('home');
// Información
Route::get('info',function(){return view('info');})->name('info');
// Auth
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');});
// Post
Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
//Casos
Route::group(['middleware' => ['can:showCase']], function () {
    Route::get('cases',[CaseController::class,'index'])->name('cases.index');
});

