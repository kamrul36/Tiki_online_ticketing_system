<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatAllocationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TripController::class, 'create']);
// Route::post('/trips', [TripController::class, 'store']);
// Route::get('/trips/{trip}', [TripController::class, 'show']);
// Route::get('/trips/{trip}/tickets', [TicketController::class, 'create']);
// Route::post('/trips/{trip}/tickets', [TicketController::class, 'store']);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');


Route::get('/', [TripController::class, 'index'])->name('trips.index');
Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');
Route::get('/trips/{trip}', [TripController::class, 'show'])->name('trips.show');
Route::get('/trips/{trip}/edit', [TripController::class, 'edit'])->name('trips.edit');
Route::put('/trips/{trip}', [TripController::class, 'update'])->name('trips.update');
Route::delete('/trips/{trip}', [TripController::class, 'destroy'])->name('trips.destroy');


Route::get('/seat-allocations', [SeatAllocationController::class, 'index'])->name('seat-allocations.index');
Route::get('/seat-allocations/create', [SeatAllocationController::class, 'create'])->name('seat-allocations.create');
Route::post('/seat-allocations', [SeatAllocationController::class, 'store'])->name('seat-allocations.store');
Route::get('/seat-allocations/{allocation}', [SeatAllocationController::class, 'show'])->name('seat-allocations.show');
Route::get('/seat-allocations/{allocation}/edit', [SeatAllocationController::class, 'edit'])->name('seat-allocations.edit');
Route::put('/seat-allocations/{allocation}', [SeatAllocationController::class, 'update'])->name('seat-allocations.update');
Route::delete('/seat-allocations/{allocation}', [SeatAllocationController::class, 'destroy'])->name('seat-allocations.destroy');


