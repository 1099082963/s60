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
        &nbsp; &nbsp; &nbsp; &nbsp;<button id="btn" type="submit" class="btn btn-primary">解除绑定</button>

        <br> <form role="form" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6" id="email">
                <div class="form-group">
                    <label><h2>邮箱:</h2></label>
                    <input id="input" type="email" name="email" class="form-control" value="{{$data->email}}" readonly>
                    <p>@if(count($errors))
                            {{ $errors->first('email')}}
                        @endif</p>
                </div>


                <div id="box-button">

                </div>
                {{--<button id="btn" type="submit" class="btn btn-primary">重新绑定</button>--}}
            </div>

        </form>
        <div class="col-md-6">
            <a href="{{url('home/user/infoupdate')}}" id="box-box">
                <button type="submit" class="btn btn-primary">返回</button>
            </a>
        </div>
    </div>
@section('my-js')
    <script>
        var $btn = document.getElementById('btn');
        var $button = document.getElementById('box-button');
        var $back = document.getElementById('box-box');
        var $input = document.getElementById('input');
        var $code = document.getElementById('code');

        $btn.onclick=function(){
            if($btn.innerHTML=='解除绑定'){
                $btn.innerHTML='请在下面修改';
                $input.removeAttribute('readonly');


                $button.innerHTML='<button type="submit" class="btn btn-primary">绑定</button>';
                $back.innerHTML='';
            }

        }

    </script>

    @endsection

@endsection