@extends('layoute.AdminMaster')
@section('title', '用户管理')
@section('model-title', '用户管理')
@section('content')
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>密码</th>
                <th>手机号</th>
                <th>状态</th>
                <th>操作</th>
            </tr>

               @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>{{$v->password}}</td>
                <td>{{$v->phone}}</td>
                <td><a href="{{url('admin/reader'.'/'.$v->status.'/'.$v->id)}}">{{$v->status==0?'开启':'禁用'}}</a></td>
                <td><a href="{{url('admin/description'.'/'.$v->id)}}"><button type="button" class="btn btn-info">详情</button> </a> <a href="{{url('admin/readerdel'.'/'.$v->id)}}"><button type="button" class="btn btn-danger">删除</button></a> <a href="{{url('admin/readeredit'.'/'.$v->id)}}"></a></td>
            </tr>

        @endforeach
    </table>
    {{$data->links('Admin.reader.page')}}

@endsection

