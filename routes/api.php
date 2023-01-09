<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoachController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlayerGameController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [RegisteredUserController::class, 'store']);

// routes for CoachController
Route::get('coaches', [CoachController::class, 'index']);
Route::get('coaches/{coach}', [CoachController::class, 'show']);
Route::post('coaches', [CoachController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('coaches/{coach}', [CoachController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('coaches/{coach}', [CoachController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for CompetitionController
Route::get('competitions', [CompetitionController::class, 'index']);
Route::get('competitions/{competition}', [CompetitionController::class, 'show']);
Route::post('competitions', [CompetitionController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('competitions/{competition}', [CompetitionController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('competitions/{competition}', [CompetitionController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for GameController
Route::get('games', [GameController::class, 'index']);
Route::get('games/{game}', [GameController::class, 'show']);
Route::post('games', [GameController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('games/{game}', [GameController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('games/{game}', [GameController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for PlayerController
Route::get('players', [PlayerController::class, 'index']);
Route::get('players/{player}', [PlayerController::class, 'show']);
Route::post('players', [PlayerController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('players/{player}', [PlayerController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('players/{player}', [PlayerController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for PlayerGameController
Route::get('playergames', [PlayerGameController::class, 'index']);
Route::get('playergames/{playergame}', [PlayerGameController::class, 'show']);
Route::post('playergames', [PlayerGameController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('playergames/{playergame}', [PlayerGameController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('playergames/{playergame}', [PlayerGameController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for RefereeController
Route::get('referees', [RefereeController::class, 'index']);
Route::get('referees/{referee}', [RefereeController::class, 'show']);
Route::post('referees', [RefereeController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('referees/{referee}', [RefereeController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('referees/{referee}', [RefereeController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

// routes for TeamController
Route::get('teams', [TeamController::class, 'index']);
Route::get('teams/{team}', [TeamController::class, 'show']);
Route::post('teams', [TeamController::class, 'store'])
    ->middleware(['auth.basic', 'admin']);
Route::put('teams/{team}', [TeamController::class, 'update'])
    ->middleware(['auth.basic', 'admin']);
Route::delete('teams/{team}', [TeamController::class, 'destroy'])
    ->middleware(['auth.basic', 'admin']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
