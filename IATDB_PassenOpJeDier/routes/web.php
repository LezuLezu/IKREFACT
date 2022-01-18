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
})->middleware(['banned', 'auth'])->name('dashboard');


// Accesible after log in
Route::middleware(['banned', 'auth'])->group(function(){

    // default route
    // Route::get('/', [\App\Http\Controllers\AnimalController::class, 'index']);
    Route::get('/', [\App\Http\Controllers\AnimalController::class, 'animalIndex']);

    // log out
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout');

    // animal routes
    // Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'index']);
    // Route::get('/animal/{id}', [\App\Http\Controllers\AnimalController::class, 'show']);
    // Route::get('/animal/{id}/owner', [\App\Http\Controllers\AnimalController::class, 'owner']);

    Route::get('/animals', [\App\Http\Controllers\AnimalController::class, 'animalIndex']);
    Route::get('/animal/{id}', [\App\Http\Controllers\AnimalController::class, 'animalShow']);
    Route::get('/animal/{id}/owner', [\App\Http\Controllers\AnimalController::class, 'ownerShow']);


    // Owner routes
    Route::get('/owners', [\App\Http\Controllers\UserController::class, 'ownerIndex']);
    Route::get('/owner/{id}', [\App\Http\Controllers\UserController::class, 'ownerShow']);
    Route::get('/owner/{id}/animals', [\App\Http\Controllers\UserController::class, 'ownerAnimals']);

    // Oppassers routes
    Route::get('/sitters', [\App\Http\Controllers\UserController::class, 'sitterIndex']);
    Route::get('/sitter/{id}', [\App\Http\Controllers\UserController::class, 'sitterShow']);
    // applications
    Route::get('/application', [\App\Http\Controllers\UserController::class, 'createApplication']);
    Route::post('/application', [\App\Http\Controllers\UserController::class, 'storeApplication']);
    // Accept/decline
    Route::get('/application/{id}', [\App\Http\Controllers\UserController::class, 'createAccept']);
    Route::post('/application/{id}', [\App\Http\Controllers\UserController::class, 'updateAccept']);
    // Review after accept
    Route::get('/review/{id}', [\App\Http\Controllers\UserController::class, 'createReview']);
    Route::post('/review/{id}', [\App\Http\Controllers\UserController::class, 'storeReview']);



    // create new pet profile
    // Route::get('/createpet', [\App\Http\Controllers\AnimalController::class, 'create']);
    // Route::post('/animals', [\App\Http\Controllers\AnimalController::class, 'store']);
    Route::get('/createpet', [\App\Http\Controllers\AnimalController::class, 'createNewPet']);
    Route::post('/animals', [\App\Http\Controllers\AnimalController::class, 'storeNewPet']);


    // Create new Sitter profile
    // Route::get('/createsitter', [\App\Http\Controllers\UserController::class, 'create']);
    // Route::post('/sitters', [\App\Http\Controllers\UserController::class, 'store']);
    Route::get('/createsitter', [\App\Http\Controllers\UserController::class, 'sitterCreate']);
    Route::post('/sitters', [\App\Http\Controllers\UserController::class, 'sitterStore']);



    // Oppasser MicroService Routes
    // applications
    Route::get('/micro/application', [\App\Http\Controllers\SitterMicroController::class, 'createApplication']);
    Route::post('/micro/application', [\App\Http\Controllers\SitterMicroController::class, 'storeApplication']);
    // dieren zien
    Route::get('/micro/animals', [\App\Http\Controllers\SitterMicroController::class, 'animalIndex']);
    Route::get('/micro/animal/{id}', [\App\Http\Controllers\SitterMicroController::class, 'animalShow']);

});

// Accesible for admin
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
    // block users
    Route::get('/admin/create--block', [\App\Http\Controllers\AdminController::class, 'createBlock']);
    Route::post('/admin/create--block', [\App\Http\Controllers\AdminController::class, 'updateBlock']);
    // deblock users
    Route::get('/admin/create--deblock', [\App\Http\Controllers\AdminController::class, 'createDeblock']);
    Route::post('/admin/create--deblock', [\App\Http\Controllers\AdminController::class, 'updateDeblock']);

    // remove pet applications
    Route::get('/admin/remove--pet', [\App\Http\Controllers\AdminController::class, 'deletePet']);
    Route::post('/admin/remove--pet', [\App\Http\Controllers\AdminController::class, 'destroyPet']);

    // Remove users
    Route::get('/admin/remove--user', [\App\Http\Controllers\AdminController::class, 'deleteUser']);
    Route::post('/admin/remove--user', [\App\Http\Controllers\AdminController::class, 'destroyUser']);


});



// Needed for log in
require __DIR__.'/auth.php';
