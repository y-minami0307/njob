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
 * ユーザ管理ページ表示
 * HTTP Method GET
 * http://xxx/maint/user
 * 
 */
Route::get('/', [UserController::class, 'index'])->name('user');

/**
 * ユーザ管理ページ検索
 * HTTP Method POST
 * http://xxx/maint/user
 * 
 */
Route::post('/', [UserController::class, 'search'])->name('user.search');

/**
 * ユーザ作成ページ表示
 * HTTP Method GET
 * http://xxx/maint/user/create
 * 
 */
Route::get('/create', [UserController::class, 'indexCreate'])->name('user.create');

/**
 * ユーザ作成
 * HTTP Method POST
 * http://xxx/maint/user/create
 * 
 */
Route::post('/create', [UserController::class, 'create'])->name('user.create');

/**
 * ユーザ編集ページ表示
 * HTTP Method GET
 * http://xxx/maint/user/{id}/update
 * 
 * @param string id ユーザID
 */
Route::get('/{id}/update', [UserController::class, 'indexUpdate'])->whereNumber('id')->name('user.update');

/**
 * ユーザ更新ページ表示
 * HTTP Method PATCH
 * http://xxx/maint/user/{id}/update
 * 
 * @param string id ユーザID
 */
Route::patch('/{id}/update', [UserController::class, 'update'])->whereNumber('id')->name('user.update');