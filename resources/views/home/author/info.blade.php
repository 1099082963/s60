@extends('home/author/master')

@section('name',session('name'))

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">

    <p>作者等级:{{$level}}</p>

@endsection

<style>
    #exampleInputEmail1{
        display:inline-block;
        width:400px;
    }
    textarea{
        vertical-align: top;
    }
    .error{
        color:red;
    }
</style>
@section('content')
    <div class="info">
        <form action="register/{{$author['id']}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">真实姓名：</label><br>
                <input type="text"  readonly="readonly" name="name" class="form-control" id="exampleInputEmail1" value="{{$author['name']}}">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("name")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">头像：</label><br>
                <input type="file"  name="icon" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">联系手机：</label><br>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1"  value="{{$author['phone']}}">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("phone")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">常用邮箱：</label><br>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{$author['email']}}">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("email")}}
                    @endif
                    </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">性别：</label><br>
                <input type="radio" name="sex"   value="0" {{$author['sex']=='0'?'checked':''}}>男
                <input type="radio" name="sex"   value="1" {{$author['sex']=='1'?'checked':''}}>女
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">年龄：</label><br>
                <input type="text" name="age" class="form-control" id="exampleInputEmail1" value="{{$author['age']}}">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("age")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">生日：</label><br>
                <input type="date" name="birthday" class="form-control" id="exampleInputEmail1" value="{{$author['birthday']}}">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("birthday")}}
                    @endif
                </span>
            </div>
            <button type="submit" class="btn btn-default">保存</button>
        </form>
    </div>
@endsection