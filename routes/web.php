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

Route::group(['middleware'=>'check.log'],function(){
    //后台主页
    Route::get('admin/index','Admin\IndexController@Index');
    //后台注销
    Route::get('admin/logout','Admin\IndexController@LogOut');
    //后台图书
    Route::get('admin/books','Admin\BooksController@index');
    Route::get('admin/books/subclass/{pid}','Admin\BooksController@subclass');
    Route::get('admin/books/{id}','Admin\BooksController@index');
    Route::get('admin/booksadd/{id}/{path}','Admin\BooksController@cateAdd');
    Route::get('admin/books/booksEdit/{id}','Admin\BooksController@cateEdit');
    Route::post('admin/books','Admin\BooksController@edit');
    Route::get('admin/booksadd','Admin\BooksController@add');
    Route::post('admin/books/add','Admin\BooksController@catedd');

    //用户管理
    Route::get('admin/reader','Admin\ReaderController@readerlist');
    Route::get('admin/description/{id}','Admin\ReaderController@readerdesc');
    Route::get('admin/dodescription/{id}','Admin\ReaderController@doreaderdesc');
    Route::post('admin/dodescription/{id}','Admin\ReaderController@doreaderdescedit');
    Route::get('admin/readerdel/{id}','Admin\ReaderController@readerdel');
    Route::get('admin/readeredit/{id}','Admin\ReaderController@readeredit');
    Route::post('admin/readeredit/{id}','Admin\ReaderController@readerUpdate');
    Route::get('admin/reader','Admin\ReaderController@dosearch');
    Route::get('admin/Perssion','Admin\PerssionController@Perssion');
    Route::get('admin/Role','Admin\RoleController@Role');
    Route::get('admin/User','Admin\UserController@User');

    //作者管理
    Route::get('admin/author','Admin\AuthorController@authorList');
    Route::get('Admin/author/index', function(){
        return view('Admin.author.index');
    });
    Route::get('admin/author/status/{id}','Admin\AuthorController@status');
});



//登陆
Route::get('admin/login','Admin\LoginController@Login');
Route::post('admin/login','Admin\LoginController@LoginIn');
//中间件防登录
Route::group(['middleware'=>'checkHome.log'],function() {
    //前台作者注册路由(3种状态)
    Route::get('home/author/register', 'Home\Author\AuthorController@register');
    Route::get('home/author/wait', function(){
        return view('home.author.wait');
    });

    Route::get('home/author/info', function(){
        return view('home.author.info');
    });
    Route::get('home/author/master', function(){
        return view('home.author.master');
    });
    Route::get('home/author/register', 'Home\Author\AuthorController@register');
    //执行注册操作路由
    Route::post('home/author/register', 'Home\Author\AuthorController@doRegister');

    Route::get('home/author', 'Home\AuthorController@Author');
    //个人中心
    Route::get('home/user/center', 'Home\CenterController@index');
    Route::get('home/user/center/myBooks/my', 'Home\user\myBooksController@myAll');
    Route::get('home/user/center/myBooks/all', 'Home\user\myBooksController@All');
    Route::get('home/user/order', 'Home\user\orderController@index');
});

Route::group(['prefix' => 'home'], function () {
    //前台主模板
    Route::get('master', function () {
        return view('home.layouts.master');
    });
    //前台首页
    Route::get('index', 'Home\IndexController@Index');
    //登录
    Route::get('user/login', 'Home\User\UserController@Login');
    Route::post('user/singin', 'Home\User\UserController@singin');
    Route::get('user/logout', 'Home\User\UserController@logout');
    //保存用户注册的信息
    Route::get('user/register', 'Home\User\UserController@Register');
    Route::post('user/store', 'Home\User\UserController@doRegister');


});

//发送短信
Route::get('/sendSMS','Home\User\UserController@sendSMS');

Auth::routes();

Route::get('/home', 'HomeController@index');
