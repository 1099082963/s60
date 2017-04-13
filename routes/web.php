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

Route::get('admin/login','Admin\LoginController@Login');
Route::post('admin/login','Admin\LoginController@LoginIn');
//后台主页
Route::get('admin/index','Admin\IndexController@Index');

Route::group(['prefix'=>'home'],function(){
    //前台主模板
    Route::get('master', function () {
        return view('home.layouts.master');
    });
    //前台首页
    Route::get('index','Home\IndexController@Index');
    //登录
    Route::get('user/login','Home\User\UserController@Login');
    Route::post('user/singin','Home\User\UserController@singin');
    Route::get('user/logout', 'Home\User\UserController@logout');
    //保存用户注册的信息
    Route::get('user/register','Home\User\UserController@Register');
//    Route::post('user/register', 'Home\User\UserController@doRegister');
    Route::post('user/store','Home\User\UserController@doRegister');
    //前台作者注册路由
    Route::get('author/register','Home\Author\AuthorController@register');

});

//发送短信
Route::get('/sendSMS','Home\User\UserController@sendSMS');

Auth::routes();

Route::get('/home', 'HomeController@index');
