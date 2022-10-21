<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SignupController;
use App\Http\Controllers\Api\SystemAcountController;
use App\Http\Controllers\Api\PlayConditionController;

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
//Route::resource('/users', UserController::class)->except(['create', 'edit']);
Route::resource('/play_conditions', PlayConditionController::class)->except(['create', 'edit']);
