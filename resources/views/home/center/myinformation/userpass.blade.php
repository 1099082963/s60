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


    <form role="form" action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        {{csrf_field()}}

        <div class="form-group">
            <label>手机号</label>
            <input type="text" name="name" class="form-control" value="{{$phone}}" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" class="form-control" name="password">
            <p>@if(count($errors))
                    {{ $errors->first('password')}}
                @endif</p>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">确认密码</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </div>
</form>
    @endsection