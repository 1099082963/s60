@extends('home/center/master')
@section('name',$name)
@section('icon')
    @if($icon=='')
        <img class="user-avatar" src="{{url("/home/img/icon.jpg")}}">
    @else
        <img class="user-avatar" src="{{url($icon)}}" alt="">
    @endif
@endsection
@section('username',$name)
@section('mmin')


    <div class="panel-body">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                {{csrf_field()}}

                <div class="form-group">
                    <label>用户名</label>
                    <input type="text" name="name" class="form-control" value="{{$name}}">
                    <p>@if(count($errors))
                            {{ $errors->first('name')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>年龄</label>
                    <input type="text" name="age" class="form-control" value="{{$data->age}}">
                    <p>@if(count($errors))
                            {{ $errors->first('age')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>邮箱:
                        @if($data->is_confirmed==0)
                            <a href="http://mail.163.com">去验证</a>
                        @else
                            @if(empty($data->email))
                                <a href="{{url('home/user/email')}}">绑定邮箱</a>
                            @endif
                            @if($data->email)
                                {{$data->email}}
                                <a href="{{url('home/user/doemail')}}">邮箱解绑</a>
                            @endif
                        @endif
                    </label>
                </div>

                <div class="form-group">
                    <label>手机:{{session('phone')}}
                        <a href="{{url('home/user/outphone')}}">手机解绑</a>
                    </label>
                </div>

                <div class="form-group">
                    <label>性格</label>
                    <textarea class="form-control" rows="3" name="character">{{$data->character}}</textarea>
                </div>
            </div>
            <div class="col-md-6 " >

                <div class="form-group" style="align:center">
                    <label>性别</label><br>
                    <input type="radio" name="sex" value="1" {{$data->sex==1?'checked':''}}>男

                    <input type="radio" name="sex" value="0" {{$data->sex==0?'checked':''}}>女

                </div>
                <div class="form-group" style="align:center">
                    <label>婚姻状态</label><br>
                    <input type="radio" name="marital" value="1" {{$data->marital==1?'checked':''}}>已婚

                    <input type="radio" name="marital" value="0" {{$data->marital==0?'checked':''}}>未婚

                </div>
                <div class="form-group">
                    <label>生日</label>
                    <input type="date" name="birthday" value="{{$data->birthday}}">
                </div>
                <div class="form-group">
                    <label>头像</label>
                    <input type="file" name="icon">
                </div>
                <div class="form-group">
                    <label>当前职业</label>
                    <input type="text" name="professional" class="form-control" value="{{$data->professional}}">
                    <p>@if(count($errors))
                            {{ $errors->first('professional')}}
                        @endif</p>
                </div>

                <div class="form-group">
                    <label>个性签名</label>
                    <textarea class="form-control" rows="3" name="personal">{{$data->personal}}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">修改信息</button>
            </div>
        </form>

        <a href="{{url('home/user/info')}}"><button class="btn btn-primary">返回</button></a>
    </div>
    </div>
@endsection
