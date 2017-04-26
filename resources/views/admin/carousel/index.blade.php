@extends('layoute.AdminMaster')
@section('title', '轮播图管理')
@section('model-title', '轮播图管理')
@section('content')
    <a href="{{url('admin/carousel/add')}}"><i class="fa fa-plus"></i>新增轮播图</a>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>管理模块</th>
            <th>图片</th>
            <th>操作</th>
        </tr>

        @forelse($carousel as $c)
        <tr>
            <td>{{$c['id']}}</td>
            <td>{{$c['carouselName']}}</td>
            <td>{{$c['image']}}</td>
            <td>
                <a href="{{url('admin/carousel/edit/'.$c['id'])}}"><i class="fa fa-plus"></i>修改轮播图</a>
                <a href="{{url('admin/carousel/del/'.$c['id'])}}"><i class="fa fa-plus"></i>删除轮播图</a>
            </td>
        </tr>
        @empty
        <tr>
            <td>没有任何轮播图,请先添加</td>
        </tr>
        @endforelse
    </table>
    {{--    {{$data->links('Admin.reader.page')}}--}}
{{--    {{$data->links()}}--}}

@endsection