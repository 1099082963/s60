@extends('home/layouts/master')
@section('main')
    <link rel="stylesheet" href="/home/css/institutions.css">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="overflow: hidden;">

        <ol class="carousel-indicators" style="margin-left: -3%;">
            @for($i=0;$i<count($carousel);$i++)
                @if($i==0)
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                @else
                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" ></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($carousel as $c)
                @if($c->id==$carousel[0]->id)
                    <div class="item active" style="width: 100%; margin-left:-520px;">
                        <center>
                            <img src="{{url($c->image)}}">
                        </center>
                    </div>
                @else
                    <div class="item" style="width: 100%;margin-left:-520px;">
                        <center>
                            <img src="{{url($c->image)}}">
                        </center>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


        <div class="mod apply-wrap" id="apply-wrap">

            <div class="title-wrap">
                <h2 class="apply-title" style="font-size: 42px;width:330px;margin-left:-50px;margin-top: 20px;">读出你的世界!</h2>
                <div class="apply-slogan"></div>
            </div>
            <div class="num-wrap" style="padding-top: 20px;">
                <div class="personal-num">
                    <p>截止{{date("Y年m月d日")}}</p>
                    <p class="big-big"><b>已有机构  家</b></p>
                    <p class="big-big"><b>已有图书  本</b></p>
                </div>
            </div>
            <div class="btn-wrap" style="margin-top:20px;">
                <a href="{{url('home/institutions/apply')}}" target="_blank" class="ui-bz-btn" style="text-decoration: none;">
                    <b class="ui-bz-btn-p-40 ui-bz-btc">马上申请加入</b>
                </a>
            </div>
        </div>

        <div style="width:1165px;margin: 0 auto;height: 30px;margin-top: 20px;border-bottom: 1px solid #E6E6E6;">
            <span style="height: 30px;border-bottom: 2px solid #089C69;">全部入驻机构</span>
        </div>
        <div style="width: 1165px;margin: 0 auto;overflow: hidden;">
            @foreach($data as $v)

                <div style="width: 240px;height: 220px;text-align: center;float: left;margin-right: 20px;">
                    <a href="{{$v->domain}}">
                    <div style="height: 175px;line-height: 175px;">
                        <img src="{{url($v->icon)}}" alt="">
                    </div>
                    </a>
                    <div style="height: 45px;">
                        <span>阅读人数</span>
                        <span>赞00</span>
                    </div>
                </div>

            @endforeach
            <div style="clear: both;text-align: center;">
                {{$data->links()}}
            </div>

                {{--广告开始--}}
                @if($advert)
                    <div class="container-fluid" style="margin:20px;">
                        <div class="container">
                            @foreach($advert as $a)
                                <div class="item active">
                                    <center>
                                        <img src="{{url($a->image)}}">
                                    </center>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                {{--广告结束--}}


        </div>
    </div>


@endsection
