@extends('layoute.AdminMaster')
@section('title', '权限管理')
@section('model-title', '权限管理')
@section('content')
    <link rel="stylesheet" href="/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{asset(url('admin/index'))}}">首页</a> &raquo; <a href="{{asset(url('admin/Perssion'))}}">权限管理</a> &raquo; 权限列表
    </div>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{asset(url('admin/perssion/add'))}}"><i class="fa fa-plus"></i>新增权限</a>
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
                        <th>权限路由</th>
                        <th>权限名称</th>
                        <th>权限描述</th>
                        <th>操作</th>
                    </tr>
                    @forelse($data as $permission)
                        <tr>
                            <td class="tc">{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->display_name}}</td>
                            <td>{{$permission->description}}</td>
                            <td>
                                <a href="{{asset(url('admin/perssion/edit',$permission->id))}}">修改</a>
                                <a href="{{asset(url('admin/perssion/delete',$permission->id))}}">删除</a>
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