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

Route::get('/', function () {
    return view('welcome');
});
// index 
Route::get('index', ['as' => 'index' , 'uses' => 'mycontroller@getindex']);
//danh sach tai khoan
Route::get('danhsach', ['as' => 'danhsach' , 'uses' => 'mycontroller@getdanhsach']);
//xóa tai khoan
Route::get('xoa/{id}', ['as' => 'xoa' , 'uses' => 'mycontroller@getxoa']);
// them user
Route::get('them',['as'=>'them','uses'=>'mycontroller@getthem']);
Route::post('them',['as'=>'them','uses'=>'mycontroller@postthem']);
// sua user
Route::get('sua/{id}',['as'=>'sua','uses'=>'mycontroller@getsua']);
Route::post('sua/{id}',['as'=>'sua','uses'=>'mycontroller@postsua']);
// chi tiet user
Route::get('chitiet/{id}',['as'=>'chitiet','uses'=>'mycontroller@getchitiet']);