@extends('home/author/master')
@section('name',session('name'))
<style>
    #exampleInputEmail1{
        width:300px;
        display:inline-block;
    }
    .error{
        color:red;
    }
</style>

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">
@endsection
@section('content')
    <div class="info">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">添加卷名：</label><br>
                <input type="text"  name="bookrollsname" class="form-control" id="exampleInputEmail1" >
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("bookrollsname")}}
                    @endif
                </span>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">描述：</label><br>
                <input type="text" name="desc" class="form-control" id="exampleInputEmail1" placeholder="描述不超过255个字">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("desc")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">此卷章节数：</label><br>
                <input type="text" name="chapterssum" class="form-control" id="exampleInputEmail1" >
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("chapterssum")}}
                    @endif
                    </span>
            </div>


            <button type="submit" class="btn btn-default">保存</button>
        </form>
    </div>
@endsection