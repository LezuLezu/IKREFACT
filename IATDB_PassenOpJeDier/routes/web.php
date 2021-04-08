<?php

use Illuminate\Support\Facades\Route;

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

// Route to log in
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Accesible after log in
Route::middleware(['auth'])->group(function(){

    // default route
    Route::get('/', [\App\Http\Controllers\AnimalController::class, 'index']);

    // animal routes
    Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index']);
    Route::get('/animal/{id}', [\App\Http\Controllers\AnimalController::class, 'show']);
    Route::get('/animal/{id}/owner', [\App\Http\Controllers\AnimalController::class, 'owner']);

    // Owner routes
    Route::get('/owners', [\App\Http\Controllers\UserController::class, 'ownerIndex']);
    Route::get('/owner/{id}', [\App\Http\Controllers\UserController::class, 'ownerShow']);
    Route::get('/owner/{id}/animals', [\App\Http\Controllers\UserController::class, 'ownerAnimals']);

    // Oppassers routes
    Route::get('/sitters', [\App\Http\Controllers\UserController::class, 'sitterIndex']);
    Route::get('/sitter/{id}', [\App\Http\Controllers\UserController::class, 'sitterShow']);
});

// Accesible for admin
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
    // block users
    Route::get('/admin/create--block', [\App\Http\Controllers\AdminController::class, 'createBlock']);
    Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'updateBlock']);
    // deblock users
    Route::get('/admin/create--deblock', [\App\Http\Controllers\AdminController::class, 'createDeblock']);
    Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'updateDeblock']);

});



// Needed for log in
require __DIR__.'/auth.php';
