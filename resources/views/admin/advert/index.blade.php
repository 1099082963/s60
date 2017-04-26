@extends('layoute.AdminMaster')
@section('title', '广告管理')
@section('model-title', '广告管理')
@section('content')
    <a href="{{url('admin/advert/add')}}"><i class="fa fa-plus"></i>新增广告</a>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>管理模块</th>
            <th>图片</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

        @forelse($advert as $c)
        <tr>
            <td>{{$c['id']}}</td>
            <td>{{$c['advertName']}}</td>
            <td>{{$c['image']}}</td>
            <td>
                <a href="{{url('admin/advert/display/'.$c['id'])}}">
                    {{$c['display']==1?'显示':'禁用'}}
                </a>
            </td>
            <td>
                <a href="{{url('admin/advert/edit/'.$c['id'])}}"><i class="fa fa-plus"></i>修改广告</a>
                <a href="{{url('admin/advert/del/'.$c['id'])}}"><i class="fa fa-plus"></i>删除广告</a>
            </td>
        </tr>
        @empty
        <tr>
            <td>没有广告图,请先添加</td>
        </tr>
        @endforelse
    </table>
    {{$advert->links()}}

@endsection