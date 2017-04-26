@extends('layoute.AdminMaster')
@section('title', '反馈管理')
@section('model-title', '反馈管理')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>Icon</th>
            <th>Desc</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->user_name}}</td>
                <td><img src="{{url($v->user_icon)}}" width="80px" alt=""></td>
                <td>{{$v->desc}}</td>
                <td><a href="{{asset(url('admin/feedback/do',$v->id))}}"><button>{{$v->status == 1?'处理':'已处理'}}</button></a></td>
                <td><a href="{{asset(url('admin/feedback/dete',$v->id))}}"><button>详情</button></a>
                    <a href="{{asset(url('admin/feedback/delete',$v->id))}}"><button>删除</button></a>
                </td>
        @endforeach
    </table>
    {{$data->links('Admin.reader.page')}}
@endsection