@extends('layoute.AdminMaster')
@section('title', '机构专区')
@section('model-title', '机构专区')
@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Icon</th>
            <th>公司名</th>
            <th>域名</th>
            <th>操作</th>
        </tr>

        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->icon}}</td>
                <td>{{$v->institutions_name}}</td>
                <td>{{$v->domain}}</td>
                <td>
                    <a href="{{asset(url('admin/institutions/all',$v->id))}}"><button type="button" class="btn btn-info">详情</button> </a>
                    <a href="{{asset(url('admin/institutions/delete',$v->id))}}"><button type="button" class="btn btn-danger">删除</button></a> </td>
            </tr>
        @endforeach
    </table>
    {{$data->links()}}

@endsection