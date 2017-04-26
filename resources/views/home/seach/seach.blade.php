@extends('home.layouts.master')
@section('main')

<div class="main-top" style="width: 1000px;margin: 0 auto;margin-top: 20px;">
    <div class="main-top-left" style="width: 750px;">
        <div>为您找&nbsp;{{$count}}&nbsp;到本相关书籍</div>
        @foreach($data as $v)
            <div class="main-top-left-one" style="margin-top: 20px;">
                <a href="{{asset(url('home/readBooks',$v->id))}}"><img style="margin-top: -70px;" src="{{url($v->icon)}}" width="107px" height="141px" alt=""></a>
                <span style="margin-left: 20px;">
                    <a href="{{asset(url('home/readBooks',$v->id))}}"><p>{{$v->booksName}}</p></a>
                    <p>作者:{{$v->author_name}}</p>
                    <p>介绍: <textarea name="" id="" cols="50" rows="2" style="resize:none;vertical-align: top;border: none;"> {{$v->desc}}</textarea></p>
                    <p>价格:￥ {{$v->price}}</p>
                </span>
            </div>
        @endforeach
    </div>
</div>

@endsection