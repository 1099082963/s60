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
    return redirect('home/index');
});

Route::group(['middleware'=>'check.log'],function(){
    //后台主页
    Route::get('admin/index','Admin\IndexController@Index')->middleware('rbac');
    //后台注销
    Route::get('admin/logout','Admin\IndexController@LogOut');
    //后台图书

    //后台图书分类
    Route::get('admin/books','Admin\BooksController@index')->middleware('rbac');
    Route::get('admin/books/subclass/{pid}','Admin\BooksController@subclass');
    Route::get('admin/books/{id}','Admin\BooksController@index');

    Route::get('admin/booksadd/add','Admin\BooksController@cateAdd');
    Route::get('admin/books/booksEdit/edit','Admin\BooksController@cateEdit');
    Route::post('admin/books','Admin\BooksController@edit');
    Route::get('admin/booksadd','Admin\BooksController@add');
    Route::post('admin/books/add','Admin\BooksController@catedd');
    //读者管理
    Route::get('admin/reader','Admin\ReaderController@readerlist')->middleware('rbac');
    Route::get('admin/reader/{status}/{id}','Admin\ReaderController@status');
    Route::get('admin/description/{id}','Admin\ReaderController@readerdesc');
    Route::get('admin/dodescription/{id}','Admin\ReaderController@doreaderdesc');
    Route::get('admin/readerdel/{id}','Admin\ReaderController@readerdel');
    Route::get('admin/readeredit/{id}','Admin\ReaderController@readeredit');
    Route::get('admin/reader','Admin\ReaderController@dosearch');
    //后台图书预览
    Route::get('admin/library','Admin\LibraryController@index');
    Route::get('admin/library/delete/{id}','Admin\LibraryController@delete');
    Route::get('admin/library/details/{id}','Admin\LibraryController@details');
    Route::get('admin/library/state/{id}','Admin\LibraryController@state');
    Route::get('admin/library/state/{id}/{up}','Admin\LibraryController@up');
    Route::get('admin/library/state/hot/{id}/{hot}','Admin\LibraryController@hot');


    Route::get('admin/Perssion','Admin\PerssionController@Perssion')->middleware('rbac');
    Route::get('admin/Role','Admin\RoleController@Role');
    Route::get('admin/User','Admin\UserController@User');


    //作者管理
    Route::get('admin/author','Admin\AuthorController@authorList')->middleware('rbac');
    Route::get('Admin/author/index', function(){
        return view('Admin.author.index');
    });
    Route::get('admin/author/status/{id}','Admin\AuthorController@status');
    Route::get('admin/author/details/{id}','Admin\AuthorController@details');
    Route::get('admin/author/detailsedit/{id}','Admin\AuthorController@detailsedit');
    Route::post('admin/author/detailsedit/{id}','Admin\AuthorController@dodetailsedit');
    Route::get('admin/author/delete/{id}','Admin\AuthorController@del');
    //权限管理
    Route::get('admin/Perssion','Admin\PerssionController@Perssion')->middleware('rbac');
    //新增权限
    Route::get('admin/perssion/add','Admin\PerssionController@perssionAdd');
    Route::post('admin/perssion/add','Admin\PerssionController@perssionAdd');
    //修改权限
    Route::get('admin/perssion/edit/{permission_id}','Admin\PerssionController@perssionEdit');
    Route::post('admin/perssion/edit/{permission_id}','Admin\PerssionController@perssionEdit');
    //删除权限
    Route::get('admin/perssion/delete/{permission_id}','Admin\PerssionController@perssionDelete');

    //角色管理
    Route::get('admin/Role','Admin\RoleController@Role')->middleware('rbac');
    //新增角色
    Route::get('admin/Role/add','Admin\RoleController@Add');
    Route::post('admin/Role/add','Admin\RoleController@Add');
    //修改角色
    Route::get('admin/Role/edit/{role_id}','Admin\RoleController@Edit');
    Route::post('admin/Role/edit/{role_id}','Admin\RoleController@Edit');
    //分配权限
    Route::get('admin/Role/attach/{role_id}','Admin\RoleController@attach');
    Route::post('admin/Role/attach/{role_id}','Admin\RoleController@attach');
    //管理员管理

    Route::get('admin/User','Admin\UserController@userList')->middleware('rbac');


    //添加管理员
    Route::any('admin/User/UserAdd','Admin\UserController@userAdd');
    //分配角色
    Route::any('admin/User/attach/{user_id}','Admin\UserController@attachRole');



    //轮播图管理
    Route::get('admin/carousel','Admin\CarouselController@showCarousel')->middleware('rbac');
    Route::get('admin/carousel/add','Admin\CarouselController@addCarousel');
    Route::post('admin/carousel/add','Admin\CarouselController@doAddCarousel');
    Route::get('admin/carousel/edit/{id}','Admin\CarouselController@editCarousel');
    Route::post('admin/carousel/edit/{id}','Admin\CarouselController@doEditCarousel');
    Route::get('admin/carousel/del/{id}','Admin\CarouselController@delCarousel');


    //广告管理
    Route::get('admin/advert','Admin\AdvertController@showAdvert')->middleware('rbac');
    Route::get('admin/advert/add','Admin\AdvertController@addAdvert');
    Route::post('admin/advert/add','Admin\AdvertController@doAddAdvert');
    Route::get('admin/advert/edit/{id}','Admin\AdvertController@editAdvert');
    Route::post('admin/advert/edit/{id}','Admin\AdvertController@doEditAdvert');
    Route::get('admin/advert/del/{id}','Admin\AdvertController@delAdvert');
    Route::get('admin/advert/display/{id}','Admin\AdvertController@display');


    //机构入驻
    Route::get('admin/institutions','Admin\InstitutionsController@index')->middleware('rbac');
    //删除机构
    Route::get('admin/institutions/delete/{id}','Admin\InstitutionsController@delete');
    //机构详情
    Route::get('admin/institutions/all/{id}','Admin\InstitutionsController@all');


    //反馈管理
    Route::get('admin/feedback','Admin\FeedBackController@index')->middleware('rbac');
    //反馈删除
    Route::get('admin/feedback/delete/{id}','Admin\FeedBackController@delete');
    //处理反馈
    Route::get('admin/feedback/do/{id}','Admin\FeedBackController@dodo');
    //反馈详情
    Route::get('admin/feedback/dete/{id}','Admin\FeedBackController@dete');

    //订单
    Route::get('admin/order','Admin\OrderController@order')->middleware('rbac');
    Route::get('admin/cancel/{id}','Admin\OrderController@cancel');
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
    //修改作者资料
    Route::post('home/author/register/{id}', 'Home\Author\AuthorController@doInfo');
    Route::get('home/author/books','Home\Author\AuthorController@bookList');
    //创建新书
    Route::get('home/author/createbooks','Home\Author\AuthorController@createbooks');
    Route::get('home/author/createbooks/{cate1_id}','Home\Author\AuthorController@cebooks');
    Route::post('home/author/createbooks','Home\Author\AuthorController@docreatebooks');
    Route::get('home/author', 'Home\AuthorController@Author');


    //增加卷和章节
    Route::get('home/author/addBookrolls/{b_id}', 'Home\Author\AuthorController@addBookrolls');
    Route::post('home/author/addBookrolls/{b_id}', 'Home\Author\AuthorController@doAddBookrolls');

    Route::get('home/author/addBookchapters/{rid}', 'Home\Author\AuthorController@addBookchapters');
    Route::post('home/author/addBookchapters/{rid}', 'Home\Author\AuthorController@doAddBookchapters');

    //直接增加章节
    Route::get('home/author/addCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@addCurrentBookchapters');
    Route::post('home/author/addCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@doAddCurrentBookchapters');
    //修改章节
    Route::get('home/author/editCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@editCurrentBookchapters');
    Route::post('home/author/editCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@doEditCurrentBookchapters');
    //ajax传分类的章节
    Route::get('home/author/catechapt/{cate_id}','Home\Author\AuthorController@cechapters');
    //ajax求site
    Route::get('home/author/catesite/{chapter_id}','Home\Author\AuthorController@catesite');
    //ajax求卷名
    Route::get('home/author/juan','Home\Author\AuthorController@juan');
    //删除章节
    Route::get('home/author/delCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@delCurrentBookchapters');
    Route::post('home/author/delCurrentBookchapters/{b_id}', 'Home\Author\AuthorController@doDelCurrentBookchapters');


    //个人中心
    Route::get('home/user/center', 'Home\CenterController@index');

    Route::get('center/myBooks/my', 'Home\user\myBooksController@myAll');

    Route::get('home/user/center/myBooks/my', 'Home\user\myBooksController@myAll');

    Route::get('home/user/center/myBooks/all', 'Home\user\myBooksController@All');
    Route::get('home/user/order', 'Home\user\orderController@index');


    //收藏

    Route::get('center/myBooks/collect', 'Home\user\myBooksController@collect');

    Route::get('home/user/center/myBooks/collect', 'Home\user\myBooksController@collect');
    Route::get('home/user/center/myBooks/cancelCollect', 'Home\user\myBooksController@cancelCollect');


    //我的关注
    Route::get('home/center/author/focus','Home\AuthorController@focus');
    //点击关注
    Route::get('home/center/focus/{author_id}','Home\AuthorController@doFocus');
    Route::get('home/center/focus','Home\AuthorController@focus');

    //机构专区
    Route::get('home/institutions','Home\InstitutionsController@index');
    //申请加入机构
    Route::get('home/institutions/apply','home\InstitutionsController@apply');
    Route::post('home/institutions/apply','home\InstitutionsController@applyPost');


    //
    Route::get('home/user/center/Money/money','Home\user\MoneyController@money');
    Route::post('home/user/center/Money/getmoney','Home\user\MoneyController@getmoney');
    Route::get('home/user/center/Money/history','Home\user\MoneyController@history');
    Route::get('home/user/center/Money/history/{id}','Home\user\MoneyController@dodelete');

    Route::get('center/Money/usermoney','Home\user\MoneyController@show');
    Route::get('home/user/center/Money/usermoney','Home\user\MoneyController@show');

    Route::get('home/user/center/Money/core','Home\user\MoneyController@core');
//

    Route::get('home/user/order','Home\user\orderController@index');
    Route::get('home/user/info','Home\user\UserinfoController@info');
    Route::get('home/user/infoupdate','Home\user\UserinfoController@infoupdate');
    Route::post('home/user/infoupdate','Home\user\UserinfoController@doinfoupdate');
    Route::get('home/user/userpass','Home\user\UserinfoController@userpass');
    Route::post('home/user/userpass','Home\user\UserinfoController@douserpass');
    Route::get('home/user/email','Home\user\UserinfoController@email');
    Route::get('home/user/verify/{confirmed_code}', 'Home\user\UserinfoController@emailConfirm');
    Route::post('home/user/email','Home\user\UserinfoController@handemail');
    Route::get('home/user/doemail','Home\user\UserinfoController@doemail');
    Route::post('home/user/doemail','Home\user\UserinfoController@handemail');
    Route::get('home/user/sendSMS','Home\user\UserinfoController@sendSMS');
    Route::get('home/user/outphone','Home\user\UserinfoController@outphone');
    Route::post('home/user/outphone','Home\user\UserinfoController@dooutphone');


    //收藏需要防登录
    Route::get('home/readBooks/collect/{id}','Home\ClassifyController@collect');





    //前台用户反馈
    Route::get('home/feedback','Home\FeedBackController@index');
    Route::post('home/feedback','Home\FeedBackController@insert');

});





//Route::group(['prefix' => 'home'], function () {


//前台
Route::get('home/index','Home\IndexController@Index');
//搜索图书
Route::post('home/seach','Home\IndexController@seach');
//Route::get('home/author','Home\AuthorController@Author');

//地图
Route::get('home/map',function(){
    return view('home.map');
});





//前台分类
Route::get('home/category','Home\ClassifyController@index');
Route::get('home/category/{id}','Home\ClassifyController@secondLevel');
//进入分类
Route::get('home/category/secend/{id}','Home\ClassifyController@second');
//图书详情
Route::get('home/readBooks/{id}','Home\ClassifyController@readBooks');

Route::post('home/readBooks/{id}','Home\ClassifyController@bookcomment');
Route::post('/home/doin','Home\ClassifyController@replay');

Route::post('home/perfect','Home\ClassifyController@perfect');
//购买
Route::get('home/center/order','Home\OrderController@index');
Route::post('center/myOrders/allorders','Home\OrderController@order');
Route::get('center/myOrder/all','Home\OrderController@all');
Route::get('center/myOrders/gobuy','Home\OrderController@gobuy');
Route::get('center/myOrders/dobuy','Home\OrderController@dobuy');
Route::post('order/pay','Home\OrderController@pay');
Route::post('order/cancel','Home\OrderController@cancel');
Route::get('center/ispay','Home\OrderController@ispay');
Route::post('home/perfect','Home\ClassifyController@perfect');

//详情中读小说
Route::get('home/details/read/{id}','Home\ClassifyController@doread');
//ajax接收小说内容
Route::get('home/details/content','Home\ClassifyController@content');



Route::group(['prefix'=>'home'],function(){
    //前台主模板
    Route::get('master', function () {
        return view('home.layouts.master');
    });
    //前台首页
    Route::get('index','Home\IndexController@Index');
    //登录
    Route::get('user/login','Home\user\UserController@Login');
    Route::post('user/singin','Home\user\UserController@singin');
    Route::get('user/logout', 'Home\user\UserController@logout');
    //保存用户注册的信息
    Route::get('user/register','Home\user\UserController@Register');
//    Route::post('user/register', 'Home\User\UserController@doRegister');
    Route::post('user/store','Home\user\UserController@doRegister');

    //前台作者注册路由
    Route::get('author/register','Home\Author\AuthorController@register');

});

//发送短信

Route::get('/sendSMS','Home\user\UserController@sendSMS');

Auth::routes();

Route::get('/home', 'HomeController@index');
