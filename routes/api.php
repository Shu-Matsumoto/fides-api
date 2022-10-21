<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SignupController;
use App\Http\Controllers\Api\SystemAcountController;
use App\Http\Controllers\Api\ActorUserController;
use App\Http\Controllers\Api\PlayConditionController;
use App\Http\Controllers\Api\PortfolioController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/signup', [SignupController::class, 'signup']);
Route::post('/signin', [SignupController::class, 'signin']);

Route::resource('/system_acounts', SystemAcountController::class)->except(['create', 'edit']);
Route::resource('/actor/users', ActorUserController::class)->except(['create', 'edit']);
Route::resource('/actor/play_conditions', PlayConditionController::class)->except(['create', 'edit']);
Route::get('/actor/play_conditions/{userId}', [PlayConditionController::class, 'showByUserId']);
Route::resource('actor/portfolios', PortfolioController::class)->except(['create', 'edit']);
Route::get('/actor/portfolios/{userId}', [PortfolioController::class, 'showByUserId']);
