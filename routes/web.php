<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\TrainsController;
use App\Http\Controllers\Guests\PagesController;


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


Route::get('/', [TrainsController::class, 'index'])->name('index');
Route::get('/trains', [PagesController::class, 'index'])->name('trains');
Route::get('/{train}', [TrainsController::class, 'show'])->name('single');
