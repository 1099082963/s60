@extends('layoute.AdminMaster')
@section('title', '图书管理')
@section('model-title', '图书管理')
@section('content')
    <link rel="stylesheet" href="/admin/css/index.css">
    <div class="top-top">
        <a href="{{asset(url("admin/books"))}}"><button class="btn btn-info">图书分类</button></a>

        <a href="{{asset(url("admin/library"))}}"><button class="btn btn-info">图书预览</button></a>

    </div>
    <div class="main" id="mmaa">
        <button class="btn btn-info bbtn">一级添加</button>
        <a href="{{asset(url("admin/books/subclass/{$pid}"))}}"><button class="btn btn-info">返回上一级</button></a>
        <table class="table table-condensed table-hover">
            <tr class="warning">
                <th>Id</th>
                <th>Name</th>
                <th>Pid</th>
                <th>Path</th>
                <th>Display</th>
                <th>Do</th>
            </tr>
           @forelse($data as $v)
               <tr>
                   <td>{{$v->id}}</td>
                   <td>{{$v->name}}</td>
                   <td>{{$v->pid}}</td>
                   <td>{{$v->path}}</td>
                   <td>{{$v->display}}</td>
                   <td>
                       <button class="btn btn-info">添加子分类</button>
                       <a href="{{asset(url("admin/books/{$v->id}"))}}"><button class="btn btn-info">查看子分类</button></a>
                       <button class="btn btn-warning">修改</button>
                       <button class="btn btn-danger">删除</button>
                   </td>
               </tr>
                <script>
                    $(function(){
                        $('.btn').click(function() {
                            switch ($(this).html()) {
                                //请求一个string响应
                                case '添加子分类':
                                    $.ajax({
                                        url: '{{url("admin/booksadd/{$v->id}/{$v->path}")}}',
                                        type: 'get',
                                        success: function (data) {
                                            $('#mmaa').empty().append(data);
                                        }
                                    })
                                    break;
                                case '修改':
                                    $.ajax({
                                        url: '{{url("admin/books/booksEdit/{$v->id}")}}',
                                        type: 'get',
                                        success: function (data) {
                                            $('#mmaa').empty().append(data);
                                        }
                                    })
                                    break;

                            }
                        })
                        $('.bbtn').click(function() {
                              $.ajax({
                                  url: '{{url("admin/booksadd")}}',
                                  type: 'get',
                                  success: function (data) {
                                       $('#mmaa').empty().append(data);
                                  }
                              })
                        })
                    })
                </script>

               @empty
            <p>暂无数据!!!</p>
            @endforelse
        </table>
        {{$data->links()}}
    </div>

@endsection
