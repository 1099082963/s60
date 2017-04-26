<!doctype html>
<html lang="en">
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

    <style>
        li{
            list-style: none;
        }
        .zong{
            background-color: #EDE8D5;
            /*height: 1000px;*/
        }

        .chapters{
            padding-left:20px;
        }
        .content{
            background-color: #FAF7ED;
        }
        .site{
            background-color: #faf2cc;
            height: 500px;
        }
    </style>

</head>
<body>
<div class="container-fluid zong" >
    <div class="row">
        <div class="col-md-3 menu ">
            <div class="list-group">
                <div id='menuL'>
                    @forelse($bookrolls as $r)
                        <h3 class="list-group-item active">{!! $r->bookrollsname !!}</h3>
                        <ul class="bookrolls list-group">
                            @forelse($bookchapters as $c)
                                @foreach($c as $ch)
                                    @if($r->id==$ch['rid'])
                                        <li class="chapters list-group-item" id="chapters">
                                            <input type="hidden" value="{{$ch['id']}}">
                                             {{$ch['chaptersname']}}
                                        </li>
                                    @endif
                                @endforeach
                            @empty
                                <li class="list-group-item">
                                    当前没有章节及内容
                                </li>
                            @endforelse
                        </ul>
                    @empty
                        <ul class="list-group">暂无内容,敬请期待</ul>
                    @endforelse
                    {{--菜单--}}
                    <script type="text/javascript">
                        $(function() {
                            $('#menuL h3').click(function () {
                                //当前h3的下一个ul做下拉切换，其他的ul全部关闭
                                $(this).next('ul').slideToggle('slow').siblings('ul').slideUp();
                            })
                        })
                    </script>
                    <script>
                            $(function(){
                                $(this).on('click','#chapters',function () {
                                    $cid=$(this).children('input').val();
//                                    alert($chaptersname)
                                    $.ajax({
                                        url:"{{url('home/details/content')}}",
                                        data:'cid='+$cid,
                                        type:'get',
                                        success:function(data){
                                            $('#site').empty().append(data);
                                        },
                                        error:function(){
                                            alert('失败');
                                        },
                                        datatype:'text'
                                    })


                                })
                                $('#chapters').trigger('click');

                            })
                    </script>
                </div>
            </div>
        </div>
        <div class="col-md-7 content">
            <h3>版权信息</h3>
            <h6>书名:{{$books->booksName}}</h6>
            <h6>作者:{{$books->author_name}}</h6>
            <h6>出版社:{{$books->copyright}}</h6>
            <div class="site" id="site">

            </div>
        </div>

        <div class="col-md-2 page">
            <a href="" onclick="history.go(-1)">退出阅读</a>
        </div>
    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>