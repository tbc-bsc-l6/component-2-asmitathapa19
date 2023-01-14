<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware('auth','user_role')->group(function(){
    Route::get('/admin' ,[AdminController::class, 'index'])->name('admin.dashboard');
});