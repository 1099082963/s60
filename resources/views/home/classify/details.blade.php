@extends('home/layouts/master')

@section('name',$name)
@section('my-css')
    <link rel="stylesheet" href="/home/css/details.css">
    <style>
        @font-face{font-family: 'ziti';src:{{url('/fonts/iconfont/iconfont.ttf')}};}
        .user-avatar{
            width:60px;
            height:60px;
            border-radius: 30px;

        }
        .line{ margin: 15px 15px;vertical-align: middle;}
        .cont span{font-size: 17px}
    </style>
@endsection
@section('main')
    <div id="db-big" class="clearfix">
        <div class="db-left clearfix">
            <div class="db-left-top clearfix">
                <img src="{{url($data->icon)}}" width="200px" height="269px" alt="">
                <div class="db-left-top-right clearfix">
                    <p><span style="font-size: 30px" yle>{{$data->booksName}}</span> <span class="dzz">电子书</span></p>
                    <p class="sss">★★★★★ 9.9<span>({{$data->collection}}人评论)</span><span> | </span><span>{{$data->bookNumber}}人在读</span></p>

                    <p class="sss">作者:{{$data->author_name}}</p>
                    <p class="sss">版权方:{{$data->copyright}}</p>
                    <div class="cx">限时促销</div>
                    <div class="jg">价格: <span class="moy">￥ {{$data->price}}</span> 原价:￥ 188（9.0折）</div>
                    <div class="bta">

                        {{--<a href="{{url('home/buy')}}"></a>--}}
                        <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                            购买全本
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">购买图书</h4>
                                    </div>
                                    <div class="modal-body" style="background-color: #FAFAF7;">
                                        <div style="float:left;"><span>购买图书：</span></div>
                                        <div>
                                            <img src="{{url($data->icon)}}" width="50px" height="70px" alt="">
                                            &nbsp;&nbsp; {{$data->booksName}}<br>
                                            <br>&nbsp;&nbsp; <span>共1本</span>
                                        </div>

                                    </div>
                                    <div> <span> 图书金额： ￥ {{$data->price}}</span></div><br>
                                    <div><span>积分使用：{{$data->price}}分  图书积分优惠：{{$data->price/10}}</span></div><br>
                                    <div> <span> <b>购买金额： ￥ {{$data->price-$data->price/10}}</b> </span></div>
                                    <br>
                                    <div></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-dismiss="modal">购买</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                     <button class="btn btn-read"><a href="{{asset('home/details/read/'.$data->id)}}">开始阅读</a></button>
                    </div>
                </div>
                <div class="db-left-load clearfix">
                    <ul>
                        @if(!empty($status) or $do == 1)
                            @if($status==0)
                                <li><a href="{{url('home/readBooks/collect/'.$data->id)}}"><span id="nocollect" class="iconfont db-left-load-ul btn">&#xe60c;</span></a></li>
                            @else
                                <li><span id="collect" class="iconfont db-left-load-ul btn" style="color:green;">&#xe60c;</span></li>
                            @endif
                        @else
                            <li><a href="{{url('home/readBooks/collect/'.$data->id)}}"><span id="noco" class="iconfont db-left-load-ul btn">&#xe60c;</span></a></li>
                        @endif
                        <li><span class="iconfont db-left-load-ul btn">&#xe610;</span></li>
                        <li><span class="iconfont db-left-load-ul btn">&#xe662;</span></li>
                    </ul>
                    <script>

                        $(function(){
                            $('#nocollect').one('click',function(){
                                $(this).css('color','green');
                                $(this).fadeIn("fast",function(){
                                    alert("收藏成功");
                                });
                            })

                            $('#collect').one('click',function(){
                                $(this).fadeIn("fast",function(){
                                    alert("您已收藏过这本书");
                                });
                            })
                            $('#noco').one('click',function(){
                                $(this).fadeIn("fast",function(){
                                    alert("请登录");
                                });
                            })
                        })
                    </script>
                </div>
                <div class="db-left-main clearfix">
                    <hr>
                    <div class="controduct clearfix">
                        <div class="box-controduct clearfix">

                            <a href=""><img src="/home/img/img/zheng.png" alt=""></a>
                            <div>
                                <ul>
                                    <li>正版全本无错字</li>
                                    <br>
                                    <li>23232个字，54个章节</li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-controduct clearfix">

                            <a href=""><img src="/home/img/img/2.png" alt=""></a>
                            <div>
                                <ul>
                                    <li>正版全本无错字</li>
                                    <br>
                                    <li>23232个字，54个章节</li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-controduct clearfix">

                            <a href=""><img src="/home/img/img/3.png" alt=""></a>
                            <div>
                                <ul>
                                    <li>正版全本无错字</li>
                                    <br>
                                    <li>23232个字，54个章节</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                        <div class="hd select-title clearfix" style="border-bottom:1px solid #999;position: relative">
                            <a href="#book-controduce" class="select-ti"><span class="select-item-border">简介</span></a>
                            <a href="#book-number" class="select-ti"><span class="select-item-border">目录</span></a>
                            <a href="#book-comment" class="select-ti"><span class="select-item-border">评论&nbsp;<span style="color:#999;">({{$coun}})</span></span></a>
                        </div>
                    <div id="book-controduce">
                        <div class="neirong">
                            <p class="booksbooks">图书简介</p>
                            <p class="desc">{{$data->desc}}</p>

                        </div>
                        <div class="info clearfix">
                            <p class="booksbooks">基本信息</p>
                            <ul>
                                <li>作者:{{$data->author_name}}</li>
                                <li>出版时间:</li>
                                <li>出版社:{{$data->copyright}}</li>
                                <li>价格:{{$data->price}}</li>
                                <li>分类:{{$data->label}}</li>
                            </ul>
                        </div>
                    </div>


                    <div id="book-number" class="clearfix">
                        <div class="hd select-title clearfix" style="border-bottom:1px solid #999">
                            <p>目录 共({{$data->count}})章</p>
                        </div>

                            <ul class="uuulll">
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;1 </span></li></a>
                                <a href=""><li><span class="sspp">&nbsp;查看全部</span></li></a>
                            </ul>
                    </div>
                    <div id="book-comment" style="margin-top:50px">

                        <div id="comment-look" >
                            <p class="booksbooks">评论({{$coun}})</p>
                            <br>
                            <table>
                                 @foreach($comment as $com)
                                    <tr>
                                        <td colspan="3">
                                            @if($com->icon=='')
                                                <img class="user-avatar" src="{{url("/home/img/icon.jpg")}}">
                                                    @else
                                                <img class="user-avatar" src="{{url($com->icon)}}" alt="">
                                            @endif

                                            <span class="line"> {{$com->name}}：

                                           {{$com->create_time}}</span>
                                                @if(session('phone'))
                                                    @if(empty($perfect))
                                                        <button class="perfect">赞</button>
                                                    @else
                                                        @foreach($perfect as $zan)

                                                            @if($com->id==$zan->comment_id)
                                                                <button class="perfect">{{$zan->perfect==''?'赞':($zan->perfect==1?'已赞':'赞')}}</button>
                                                            @endif

                                                        @endforeach
                                                    @endif
                                                @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cont" width="90px"><span>评论内容：</span></td>
                                        <td comment_id="{{$com->id}}">{{$com->comment}}</td>
                                        <td></td>
                                    </tr>


                                    <tr>
                                        <td colspan="3">
                                            @if(count($arr)>0)
                                            @foreach($arr as $item)
                                                @if($item->comment_id==$com->id)
                                                    <p>{{$item->name}} 回复:
                                                    {{$item->replay_comment}}</p>

                                                @endif
                                            @endforeach
                                        @endif()
                                        </td>
                                    </tr>

                                     <tr>
                                         <td colspan="2">
                                             <div class="innerBox">
                                                 @if(!session('phone'))
                                                     登录才可以回复哦
                                                     <a href="{{url('home/user/login')}}" style="color: red">去登录</a>
                                                 @else
                                                     <button class="replay-comment">回复</button>
                                                 @endif
                                                 <div class="append" style="display:none">
                                                        <textarea name="replay" id="" cols="100" rows="5"></textarea>
                                                        <button>回复</button>

                                                 </div>

                                             </div>
                                             <hr>
                                         </td>
                                     </tr>
                                 @endforeach

                            </table>{{$comment->links('Home.page')}}
                        </div>
                        <div id="comment" class="clearfix">
                            <hr>
                            @if(!session('phone'))
                                登录才可以评论哦
                                <a href="{{url('home/user/login')}}" style="color: red">去登录</a>
                            @else
                                <div>
                                    {{--{{url('home/readBooks/'.$book_id)}}--}}
                                    <form action="" method="post">
                                        {{csrf_field()}}
                                        <div class="comment-text">
                                            <textarea name="comment" class="textarea" cols="100" rows="5"></textarea>
                                        </div>
                                        <p>@if(count($errors))
                                            {{ $errors->first('comment')}}
                                        @endif</p>
                                        <button type="submit">评论</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>




                </div>
            </div>


        </div>

        <div class="db-right clearfix">
            <div class="asidea clearfix">
                <div class="aside clearfix">
                    小说热门榜单
                </div>
                <div class="asidea-one clearfix">
                    <div class="leishen">
                        <span class="paiming">1</span>&nbsp;&nbsp;&nbsp;
                        <span>{{$data->booksName}}</span>
                    </div>
                    <div class="asidea-one-main clearfix">
                        <div style="width:70px;float:left;">
                            <a href=""><img src="{{url($data->icon)}}" width="70px" height="81px" alt=""></a>
                        </div>
                        <div>
                            <span class="app ddda">{{$data->booksName}}</span>
                            <span class="app">{{$data->author_name}}</span>
                            <span class="app">手机APP免费</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="asidea clearfix">

                <div class="aside">
                    小说热门榜单
                </div>
                <div class="asidea-one">
                    <div class="leishen">
                        <span>1</span>
                        <span>雷神</span>
                    </div>
                    <div class="asidea-one-main">
                    </div>
                </div>
            </div>



            <div class="asidea">
                <div class="aside">
                    浏览历史
                </div>
                @if(session('phone'))
                    @if($newcollers)
                        @foreach($newcollers as $v)
                            <div class="image">
                                <div style="width:70px;float:left;">
                                    <a href=""><img src="{{url($v['icon'])}}" width="70px" height="81px" alt=""></a>
                                </div>
                                <div class="booksinfo">
                                    <span class="app ddda">{{$v['booksname']}}</span>
                                    <span class="app">{{$v['author_name']}}</span>
                                    <span class="app">手机APP免费</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
            </div>



        </div>
    </div>
    <script>
        $(function(){
            $('.replay-comment').click(function () {
//                alert($(this).next());
                $(this).next().show();
                $(this).hide();
                $('body').click(function(){
                    $('.replay-comment').show();
                    $('.append').hide();
//                   alert(1);
                });
                $('.innerBox').click (function(e){
//                    alert(2);
                    var en = e|| window.event;
                    en.stopPropagation();
                })
            })



            $('.append button').click(function(){
                $comment_id=$(this).parent().parent().parent().parent().prev().prev().children().first().next().attr('comment_id');
                $replay = $(this).prev().val();
//                alert($comment_id);
                $.ajax({
                    url:'{{url('home/doin')}}',
                    type:'post',
                    data:{'comment_id': $comment_id,'_token':'{{csrf_token()}}','book_id':'{{$book_id}}','replay_comment':$replay},
                    success:function(data){
                        window.location.reload();

                        $('.append button').prev().val('');
                    },
                    error:function(data){

                    },
                    dataType:'json',
                })
            })

            $('.perfect').click(function(){
                $comment_id=$(this).parent().parent().next().children().first().next().attr('comment_id');
                if($(this).html()=='赞'){
                    $(this).html('已赞');
                    $.ajax({
                        url:'{{url('home/perfect')}}',
                        type:'post',
                        data:{'comment_id': $comment_id,'perfect':1,'_token':'{{csrf_token()}}','book_id':'{{$book_id}}'},

                        success:function(data){

                        },
                        error:function(data){
                            alert('点赞失败')
                        },
                        dataType:'json'
                    });

                }else{ $(this).html('赞');
                    $.ajax({
                        url:'{{url('home/perfect')}}',
                        type:'post',
                        data:{'comment_id': $comment_id,'perfect':0,'_token':'{{csrf_token()}}','book_id':'{{$book_id}}'},
                        success:function(){
//                           alert(1)
//                           window.location.reload();

                        },
                        error:function(){
                            alert('点赞失败')
                        },
                        dataType:'json'
                    });

                }
//                   $(this).html('赞');
//                    alert($comment_id)

            })
            $('.modal-footer .btn').click(function(){
                $.ajax({
                    url:'{{url('center/myOrders/allorders')}}',
                    type:'post',
                    data:{'book_id':'{{$book_id}}','_token':'{{csrf_token()}}'},
                    sucess:function(data){
                        alert('下单成功');
                    },
                    error:function(data){
                        alert('下单失败');
                    }
                });
            })



        })


    </script>
    @endsection

