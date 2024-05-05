<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\FormController;
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

Route::get('/', [MainController::class, 'welcome'])->name('welcome');

Route::get('/login', [MainController::class, 'login'])->name('login');;

Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/create', [FormController::class, 'add_news'])->name('create');

Route::post('/create/check', array(FormController::class, 'create_check'))->name('create_check');

Route::get('/news/{id}', array(NewsController::class, 'show_news'))->name('news.show');

