@extends('layoute.AdminMaster')
@section('title', '管理员管理')
@section('model-title', '管理员管理')
@section('content')
    <link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{asset(url('admin/index'))}}">首页</a> &raquo; <a href="{{asset(url('admin/User'))}}">管理员管理</a> &raquo; 管理员列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{asset(url('admin/User/UserAdd'))}}"><i class="fa fa-plus"></i>新增管理员</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>邮箱</th>
                        <th>角色名称</th>
                        <th>操作</th>
                    </tr>
                    @forelse($data as $user)
                        <tr>
                            <td class="tc">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->roles}}</td>
                            <td>
                                <a href="{{asset(url('admin/User/attach',$user->id))}}">分配角色</a>
                                <a href="">修改</a>
                                <a href="">删除</a>
                            </td>
                        </tr>
                    @empty
                        <p>暂无数据!!!</p>
                    @endforelse
                </table>
                <div>{{$data->links()}}</div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
@endsection