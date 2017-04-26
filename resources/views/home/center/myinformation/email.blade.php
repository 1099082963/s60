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
            {{csrf_field()}}
            <div class="col-md-6">
                <div class="form-group">
                    <label><h2>邮箱:</h2></label>
                    <input type="email" name="email" class="form-control" value="">

                    <p>@if(count($errors))
                            {{ $errors->first('email')}}
                        @endif</p>
                </div>
                <button type="submit" class="btn btn-primary">绑定</button>
            </div>
        </form>
    </div>
@endsection