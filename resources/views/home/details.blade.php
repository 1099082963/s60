<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <link rel="shortcut icon" type="image/x-icon" href="/home/img/favicon.ico">
    <title>@yield('title','百度阅读')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="/js/jquery-1.8.3.js"></script>

    <link rel="stylesheet" href="{{url('/fonts/iconfont/iconfont.css')}}">
    <style>

    </style>
</head>
<body>
<div id="comment-look" class="container">
        <table class="table">
       <tr>
           <td>姓名：</td>
           <td>评论：</td>
       </tr>
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>
    </table>
</div>
<div id="comment" class="container">
    @if(!session('phone'))
        登录才可以评论哦
        <a href="{{url('home/user/login')}}">去登录</a>
    @else
        <div>
            <form action="" method="post">
                {{csrf_field()}}
                <div class="comment-text">
                    <textarea name="comment" id="" cols="100" rows="5"></textarea>
                </div>
                <button type="submit">评论</button>
            </form>
        </div>
    @endif
</div>

</body>
</html>