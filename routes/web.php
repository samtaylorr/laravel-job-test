<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

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

// Set routes for Jobs
Route::get('/', [JobsController::class, 'index'])->name('jobs.index');
Route::view('/create', 'jobs.create');
Route::get('/jobs/{id}', [JobsController::class, 'show']);
Route::post('/', [JobsController::class, 'store']);
