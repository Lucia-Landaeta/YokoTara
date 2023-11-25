<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Moder\NoticeController;
use App\Http\Controllers\PostController;

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
// Donaciones
Route::get('donar',[DonationController::class,'index'])->name('donations.index');
Route::get('donar/{id}',[DonationController::class,'show'])->name('donations.show');
// Mis intereses
Route::get('Mis-intereses',[NoticeController::class,'show'])->name('myNotices.show');


