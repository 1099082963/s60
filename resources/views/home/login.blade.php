@extends('home/register')
<title>@yield('title','登录')</title>
@section('form')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>登录百度阅读</h1>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{url('home/user/singin')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">手机号</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group checkcode">
                        <label for="exampleInputPassword1">验证码</label>
                        <input type="text" class="form-control" style="width:200px;display:inline-block;" name="code" placeholder="请输入验证码">
                        {{--{!! captcha_img()!!}--}}
                        <img src="{{captcha_src()}}" alt="" id="code"/>
                        <span>看不清？<a href="javascript:void(0);" onclick="">换一张</a></span>
                    </div>
                    <button type="submit" class="btn btn-default btn-block btn-success">点击登录</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script>
        $(".checkcode a").click(function () {
            $("#code").attr('src',"{{captcha_src()}}"+Math.random());
        });
    </script>
@endsection