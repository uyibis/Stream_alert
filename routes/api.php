<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\URLDataController;
use App\Http\Controllers\SendAlertController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'signin']);
Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'signup']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('say', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});


Route::middleware('auth:sanctum')->group(function () {
    // Your protected routes here
});


Route::apiResource('url-data', URLDataController::class);

// SendAlert Routes
Route::apiResource('send-alerts', SendAlertController::class);

// Profile Routes
Route::apiResource('profiles', ProfileController::class);
