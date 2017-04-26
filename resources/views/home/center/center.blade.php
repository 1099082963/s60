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
    <div class="main">
        <div class="right-main-container" data-csrf_sign="2109984400">
            <div class="books-title-select">
                <div class="books-part-btns" id="mmmm">

                    @if(count($count)==0)
                        <button class="button">已购买</button>(0)
                    @else
                        <button class="button">已购买</button>({{count($count)}})
                    @endif

                    @if(empty($books))
                        <button class="button">已收藏</button>(0)
                    @else
                        <button class="button">已收藏</button>({{count($books)}})
                    @endif

                </div>
            </div>
            <div class="books-container" id="box">
                <div class="no-item-bg">
                    <a target="_blank" href="http://yuedu.baidu.com/"><div class="select-book-btn"></div></a>
                </div>
            </div>
            <div id="page">

            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#mmmm button').click(function(){
                switch($(this).html()){
                    //请求一个string响应
                    case '全部(0)':
                        $.ajax({
                            url:'center/myBooks/all',
                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;
                    case '已购买':
                        $.ajax({
                            url:'{{url('center/ispay')}}',

                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;


                    case '已收藏':
                        $.ajax({

                            url:'{{url('center/myBooks/collect')}}',

                            type:'get',
                            success:function(data){
                                $('#box').empty().append(data);
                            }
                        })
                        break;


                }
            })
        })
    </script>

@endsection