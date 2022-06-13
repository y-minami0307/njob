<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\DepartmentApiController;

/*
|--------------------------------------------------------------------------
| Department Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 部門IDに一致するグループを取得
 * http://xxx/api/department/{department_id}
 * 
 */
Route::get('/{department_id}', [DepartmentApiController::class, 'getGroupsFindByDepartmentId'])->whereNumber('department_id');