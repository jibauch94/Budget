<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/budget/budget-dashboard', function () {
    return view('budget/budget-dashboard');
});

Route::get('/budget/income', function () {
    return view('budget/income');
});

Route::get('/budget/fixedCosts', function () {
    return view('budget/fixedCosts');
});

Route::get('/budget/investments', function () {
    return view('budget/investments');
});

Route::get('/budget/savings', function () {
    return view('budget/savings');
});

Route::get('/budget/spendings', function () {
    return view('budget/spendings');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
