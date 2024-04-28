<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'welcome']);

Route::get('/login', [MainController::class, 'login']);

Route::get('/register', [MainController::class, 'register']);

Route::get('/create', [MainController::class, 'add_news'])->name('create');
Route::post('/create/check', [MainController::class, 'create_check']);

