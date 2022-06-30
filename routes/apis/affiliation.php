<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\AffiliationsApiController;

/*
|--------------------------------------------------------------------------
| Affiliation Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 所属IDに一致する部門を取得
 * HTTP Method GET
 * http://xxx/api/affiliations/{id}/departments
 * 
 * @param string id 所属ID
 */
Route::get('/{id}/departments', [AffiliationsApiController::class, 'getDepartmentsFindById'])->whereNumber('id');

/**
 * 所属IDに一致する部門のグループを取得
 * HTTP Method GET
 * http://xxx/api/affiliations/{affiliation_id}/departments/{department_id}/groups
 * 
 * @param string affiliation_id 所属ID
 * @param string department_id  部門ID
 */
Route::get('/{affiliation_id}/departments/{department_id}/groups', [AffiliationsApiController::class, 'getGroupsFindByAffiliationDepartment'])->whereNumber('affiliation_id', 'department_id');