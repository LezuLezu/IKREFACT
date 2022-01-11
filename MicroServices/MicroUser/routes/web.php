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
Route::get('/', [\App\Http\Controllers\AnimalController::class, 'animalIndex']);

// Owner routes
Route::get('/owners', [\App\Http\Controllers\UserController::class, 'ownerIndex']);
Route::get('/owner/{id}', [\App\Http\Controllers\UserController::class, 'ownerShow']);
Route::get('/owner/{id}/animals', [\App\Http\Controllers\UserController::class, 'ownerAnimals']);

// Oppassers routes
Route::get('/sitters', [\App\Http\Controllers\UserController::class, 'sitterIndex']);
Route::get('/sitter/{id}', [\App\Http\Controllers\UserController::class, 'sitterShow']);
