<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', function () {
    return view('welcome');
});



// cars -> Return headline all cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index'); //naming reference
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
// /cars/2
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');


