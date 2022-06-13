<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maints\UserController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ユーザ作成ページ表示
 * http://xxx/maint/user/create
 * 
 */
Route::get('/create', [UserController::class, 'indexCreate'])->name('user.create');

/**
 * ユーザ作成
 * http://xxx/maint/user/create
 * 
 */
Route::post('/create', [UserController::class, 'create'])->name('user.create');