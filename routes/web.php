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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// 追加：仮のトップページ
Route::get('/', 'HomeController@index')->name('index');
// タスク一覧画面
Route::get('task/', 'TodoController@index')->name('task.index');
// タスク新規作成画面
Route::get('task/create', 'TodoController@create')->name('task.create');
// タスク編集画面
Route::get('task/edit/{id}', 'TodoController@edit')->name('task.edit');
// タスク詳細画面
Route::get('task/{id}', 'TodoController@show')->name('task.detail');
// タスク登録処理
Route::post('task/store', 'TodoController@store')->name('task.store');
// タスク更新処理
Route::post('task/update/{id}', 'TodoController@update')->name('task.update');
// タスク削除処理
Route::post('task/delete', 'TodoController@delete')->name('task.delete');