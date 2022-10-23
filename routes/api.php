<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SignupController;
use App\Http\Controllers\Api\SystemAcountController;
use App\Http\Controllers\Api\ActorUserController;
use App\Http\Controllers\Api\MakerUserController;
use App\Http\Controllers\Api\PlayConditionController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\ActorScheduleController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\OfferResponseController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\EvaluationController;
use App\Http\Controllers\Api\ViolationReportController;

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

Route::resource('/maker/users', MakerUserController::class)->except(['create', 'edit']);

Route::resource('/actor/play_conditions', PlayConditionController::class)->except(['create', 'edit']);
Route::get('/actor/{userId}/play_conditions', [PlayConditionController::class, 'showByUserId']);

Route::resource('actor/portfolios', PortfolioController::class)->except(['create', 'edit']);

Route::get('/actor/{userId}/portfolios', [PortfolioController::class, 'showByUserId']);
Route::resource('/actor_schedules', ActorScheduleController::class)->except(['create', 'edit']);
Route::get('/actor_schedules/users/{userId}', [ActorScheduleController::class, 'indexByUserId']);

Route::resource('/offers', OfferController::class)->except(['create', 'edit']);
Route::get('/offers/{offerId}/detail', [OfferController::class, 'showdetail']);
Route::get('/offers/users/{userId}', [OfferController::class, 'indexByUserId']);
Route::resource('/offer_responses', OfferResponseController::class)->except(['create', 'edit']);

Route::resource('/chats', ChatController::class)->except(['create', 'edit']);
Route::post('/chats/users/{userId}', [ChatController::class, 'indexByUserId']);

Route::resource('/evaluations', EvaluationController::class)->except(['create', 'edit']);

Route::resource('/violation_reports', ViolationReportController::class)->except(['create', 'edit']);
