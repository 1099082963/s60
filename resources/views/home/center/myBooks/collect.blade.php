<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <link rel="shortcut icon" type="image/x-icon" href="/home/img/favicon.ico">
    <title></title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="/js/jquery-1.8.3.js"></script>

</head>
<body>

@foreach($books as $b)
    <div style="float:left;margin-right:20px;">
        {{--直接读取内容的url,书id是$b[0]['id']--}}
        <a href=""><img src="{{url($b[0]['icon'])}}" width="150px" height="200px" alt=""></a>
        <div>
            <a href="">{{$b[0]['booksName']}}</a>
            {{--用户id--}}
            <span  id="cancel" value="{{$b[0]['id']}}">取消收藏 <input type="hidden" value="{{$b[0]['id']}}"> </span>

        </div>
    </div>
@endforeach
<script>
    $(function(){
        $(this).on('click','#cancel',function () {
            $bid=$(this).children('input').val();
//            $_this=$(this);
//            alert($bid)
            $.ajax({
                url:"{{url('home/user/center/myBooks/cancelCollect')}}",
                data:'bid='+$bid,
                type:'get',
                success:function(data){
                   if (data==1){
                       alert('取消成功');
                       location.reload();
                   }else{
                       alert('取消失败')
                   }
                },
                error:function(){
                    alert('失败');
                },
                datatype:'text'
            })
        })

//        $('#cancel').click(function(){


    })

</script>

</body>
</html>