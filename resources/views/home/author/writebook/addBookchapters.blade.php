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
    #textarea{
        height: 300px;
    }
    #bookrolls{
        width: 200px;
        display:inline-block;
    }
</style>

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">
@endsection
@section('content')
    <div class="info">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div style="color:red;">{!! session('chapterserror') !!}</div>
            <div class="form-group">
                <label for="exampleInputEmail1">章节名：</label><br>
                <input type="text"  name="bookchaptersname" class="form-control" id="exampleInputEmail1" >
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("bookchaptersname")}}
                    @endif
                </span>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">选择卷：</label><br>
                <select class="form-control type" name="bookrolls" id="bookrolls">
                    @foreach($bookrolls as $v)
                        <option  value="{{$v['id']}}">{{$v['bookrollsname']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">章节内容：</label><br>

                <textarea type="text" name="site" class="form-control" id="textarea"></textarea>
            </div>


            <button type="submit" class="btn btn-default">保存</button>
        </form>
    </div>
@endsection