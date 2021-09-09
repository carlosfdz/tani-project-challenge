<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompaniesController;
use App\Http\Controllers\Api\EmployeesController;
use App\Http\Controllers\Auth\PassportAuthController;

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

Route::middleware("localization")->group(function () {
    Route::post('login', [PassportAuthController::class, 'login']);
});


Route::apiResource('companies', CompaniesController::class);

Route::apiResource('employees', EmployeesController::class);

