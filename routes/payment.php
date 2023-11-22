<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::get('donations',[DonationController::class,'index'])->name('donations.index');
Route::get('donations/edit',[DonationController::class,'edit'])->name('donations.edit');
Route::get('donations/{id}',[DonationController::class,'show'])->name('donations.show');

Route::get('benefaction',[DonationController::class,'index'])->name('benefaction');