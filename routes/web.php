<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'show']);

Route::get('delete/{task}', [UserController::class, 'delete']);
Route::get('edit/{task}/{text}', [UserController::class, 'edit']);
Route::post('task/create', [UserController::class, 'taskCreate']);
