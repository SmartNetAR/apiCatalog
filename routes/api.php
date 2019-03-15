<?php
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 21:00:26
 * @modify date 2019-03-11 21:00:26
 * @desc [description]
 */

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function () {
    Route::post('objects', 'ObjectsController@store');
    Route::get('objects', 'ObjectsController@index');
    Route::post('photos', 'ObjectsController@updatePhoto');
});