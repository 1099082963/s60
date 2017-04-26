@extends('layoute.AdminMaster')
@section('title', '作者管理')
@section('model-title', '作者管理')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>头像</th>
            <th>手机号</th>
            <th>邮箱</th>
            <th>QQ</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td><img src="{{url($v->icon)}}" width="50px" height="50px"></td>
                <td>{{$v->phone}}</td>
                <td>{{$v->email}}</td>
                <td>{{$v->QQ}}</td>
                @if($v->status==1)
                    <td>
                        申请中
                    </td>
                @elseif($v->status==2)
                    <td>
                        申请通过
                    </td>
                @endif
                <td>
                    <a href="{{url('admin/author/details'.'/'.$v->id)}}">
                        <button type="button" class="btn btn-info">详情</button>
                    </a>
                    <a href="{{url('admin/author/delete'.'/'.$v->id)}}">
                        <button type="button" class="btn btn-danger">删除</button>
                    </a>
                    <a href="{{url('admin/author/detailsedit'.'/'.$v->id)}}">
                        <button type="button" class="btn btn-info">修改</button>
                    </a>
                    @if($v->status==1)
                    <a href="{{url('admin/author/status'.'/'.$v->id)}}">
                        <button type="button" class="btn btn-success">同意</button>
                    </a>
                    @else
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
{{--    {{$data->links('Admin.reader.page')}}--}}
    {{$data->links()}}

@endsection