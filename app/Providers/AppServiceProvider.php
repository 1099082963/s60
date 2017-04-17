<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $nav = array(
            array('url'=>'admin/index','name'=>'后台首页'),
            array('url'=>'admin/reader','name'=>'用户管理'),
            array('url'=>'admin/author','name'=>'作者管理'),
            array('url'=>'admin/books','name'=>'图书管理'),
            array('url'=>'admin/Perssion','name'=>'权限管理'),
            array('url'=>'admin/Role','name'=>'角色管理'),
            array('url'=>'admin/User','name'=>'管理员管理'),
            array('url'=>'admin/reader','name'=>'评论管理'),
        );
        view()->composer('layoute.AdminMaster',function($view) use($nav){
            $view->with('nav',$nav);
        });

        $authornav = array(
            array('url'=>'home/author/register','name'=>'个人资料'),
            array('url'=>'home/author/books','name'=>'我的小说'),
        );
        view()->composer('home.author.master',function($view) use($authornav){
            $view->with('authornav',$authornav);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
