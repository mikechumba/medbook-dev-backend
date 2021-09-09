<?php

use App\Http\Controllers\GenderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServicesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('patients', [PatientController::class, 'index']);
Route::post('patients', [PatientController::class, 'store']);

Route::get('gender', [GenderController::class, 'index']);
Route::get('services', [ServicesController::class, 'index']);
