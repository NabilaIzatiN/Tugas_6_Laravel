<?php

use App\Http\Controllers\homeController;
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

Route::get('', [homeController::class, 'index']);

Route::get('/friends', [homeController::class, 'index']);

Route::get('/friends/create', [homeController::class, 'create']);

Route::post('/friends', [homeController::class, 'store']);

Route::get('/friends/{id}', [homeController::class, 'show']);

Route::get('/friends/{id}/edit', [homeController::class, 'edit']);

Route::put('/friends/{id}', [homeController::class, 'update']);

Route::delete('/friends/{id}', [homeController::class, 'destroy']);
