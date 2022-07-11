<?php

use App\Http\Controllers\FixedCostsController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InvestmentsController;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\SpendingsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('income', IncomeController::class);
Route::apiResource('fixedCosts', FixedCostsController::class);
Route::apiResource('investment', InvestmentsController::class);
Route::apiResource('savings', SavingsController::class);
Route::apiResource('spendings', SpendingsController::class);
