<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/crud', function () {
    return view('crud'); 
});



Route::post('insertData',[ProductController::class, 'insert']);

Route::get('/crud',[ProductController::class, 'readdata']);

Route::get('/insertRead', function(){
    return view('insertRead');
});

Route::get('updateForm/{id}',[ProductController::class, 'updateForm']);
Route::put('updateProduct/{id}',[ProductController::class, 'updateProduct']);

Route::get('updatedata',[ProductController::class, 'update']);

// Route::get('/', [HomeController::class,'index']);
// Route::get('/', [HomeController::class, 'redirect']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
