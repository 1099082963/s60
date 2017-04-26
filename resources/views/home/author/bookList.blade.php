@extends('home/author/master')

@section('name',session('name'))

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">
@endsection
@section('content')

    @if(session('bookrollserror'))
    <script>
            alert("本书没有创建卷和章节,删除失败");
    </script>
    @endif

    <div class="mybooks">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @if(empty($books))
                <table class="table table-hover">
                    <tr> <td class="info">你还没有作品哦，快去创作吧</td></tr>
                </table>
                <a href="{{url('home/author/createbooks')}}">去创作</a>
            @else
                @foreach($books as $v)
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         《{{$v['booksName']}}》
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <table class="table table-hover">
                        <th>书名</th>
                        <th>封面</th>
                        <th>书标签</th>
                        <th>价格</th>
                        <th>描述</th>
                        <th>创建时间</th>
                        <th>操作</th>

                        <tr class="">
                            <td class="active">《{{$v['booksName']}}》</td>
                            <td class="success"><img src="{{url($v['icon'])}}" width="50px" height="50px"></td>
                            <td class="success">{{$v['label']}}</td>
                            <td class="success">{{$v['price']}}</td>
                            <td class="warning">
                                <textarea name="" readonly style="resize:none">{{$v['desc']}}</textarea>
                            </td>
                            <td class="danger">{{date('Y-m-d,H:i:s',$v['registime'])}}</td>
                            <td class="info">
                                {{--添加完卷再添加章节时，传去的参数是id,当前卷的id是rid--}}
                                <a href="{{url('home/author/addBookrolls',$v['id'])}}">添加卷</a><br>
                                <a href="{{url('home/author/editCurrentBookchapters',$v['id'])}}">修改章节</a>
                            </td>
                            {{--直接添加章节时，传去的参数是书籍id,所以参数是bid不是rid--}}
                            <td class="info">
                                <a href="{{url('home/author/addCurrentBookchapters',$v['id'])}}">添加章节</a><br>
                                <a href="{{url('home/author/delCurrentBookchapters',$v['id'])}}">删除章节</a>
                            </td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
