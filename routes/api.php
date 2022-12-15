<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DrugController;
use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\RequestController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('user', [UserController::class, 'index']);
    Route::get('requests', [RequestController::class, 'index']);
    Route::get('drugs', [DrugController::class, 'index']);
    Route::get('facilities', [FacilityController::class, 'index']);
});
