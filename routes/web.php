<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('profession', [ProfessionController::class, 'index']);

Route::get('categories',[CategoriesController::class, 'index']);

Route::get('type',[TypeController::class, 'index']);

Route::get('role',[RoleController::class, 'index']);