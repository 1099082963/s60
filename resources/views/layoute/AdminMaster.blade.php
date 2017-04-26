<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <title>@yield('title', '后台首页')</title>

    <script src="{{asset('/js/jquery-1.8.3.min.js')}}"></script>

    <style>
        body {
            padding-top: 70px;
            padding-bottom: 30px;
        }

        .theme-dropdown .dropdown-menu {
            position: static;
            display: block;
            margin-bottom: 20px;
        }

        .theme-showcase > p > .btn {
            margin: 5px 0;
        }

        .theme-showcase .navbar .container {
            width: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">百度阅读-后台管理系统</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav" style="float: right;">
                    <li><a href="">{{session('name')}}</a></li>
                    <li><a href="{{url('admin/logout')}}">注销</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2 sidebar">
            <ul class="nav navbar-nav">
                @foreach($nav as $v)
                    <li><a href="{{url($v['url'])}}">{{$v['name']}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            <h1>@yield('model-title', '后台首页')</h1>

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>