@extends('layoute.AdminMaster')
@section('title', '图书管理')
@section('model-title', '图书管理')
@section('content')
    <link rel="stylesheet" href="/admin/css/index.css">
    <div class="top-top">
        <a href="{{asset(url("admin/books"))}}"><button class="btn btn-info">图书分类</button></a>
        <a href="{{asset(url("admin/library"))}}"><button class="btn btn-info">图书预览</button></a>
    </div>
    <table class="table table-condensed table-hover">
        <tr class="warning">
            <th>Id</th>
            <th>Cid</th>
            <th>Author_Id</th>
            <th>BooksName</th>
            <th>Author_Name</th>
            <th>Price</th>
            <th>Label</th>
            <th>Do</th>
        </tr>
        @forelse($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->cid}}</td>
                <td>{{$v->author_id}}</td>
                <td>{{$v->booksName}}</td>
                <td>{{$v->author_name}}</td>
                <td>{{$v->price}}</td>
                <td>{{$v->label}}</td>
                <td>
                    <a href="{{asset(url('admin/library/details/'.$v->id))}}"><button class="btn btn-info">详情</button></a>
                    <a href="{{asset(url('admin/library/delete/'.$v->id))}}"><button class="btn btn-danger">删除</button></a>
                    <a href="{{asset(url('admin/library/state/'.$v->id))}}"><button class="btn btn-danger">状态管理</button></a>
                </td>
            </tr>
        @empty
            <p>暂无数据!!!</p>
        @endforelse
    </table>
@endsection