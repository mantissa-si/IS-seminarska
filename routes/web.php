<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

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


Route::view('/swagger', 'swagger');

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('player', PlayerController::class)
    ->only('index')
    ->middleware('auth');

Route::resource('player', PlayerController::class)
    ->only(['store', 'create'])
    ->middleware(['admin']);

Route::resource('team', TeamController::class)
    ->only('index')
    ->middleware('auth');

Route::resource('team', TeamController::class)
    ->only(['store', 'create'])
    ->middleware(['admin']);

require __DIR__ . '/auth.php';
