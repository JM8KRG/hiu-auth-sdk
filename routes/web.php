<?php

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

Route::get('/', 'Index\IndexController@index');

// ユーザー切り替え
Route::get('debug', 'Debug\User\ImpersonateController@index');
Route::post('debug', 'Debug\User\ImpersonateController@manualUpdate');
// ユーザーを戻す
Route::get('revert', 'Debug\User\ImpersonateController@revertUser');
// キャッシュ削除
Route::get('cache', 'Debug\Cache\DeleteCacheController@index');
Route::get('cache/delete', 'Debug\Cache\DeleteCacheController@deleteCache');
