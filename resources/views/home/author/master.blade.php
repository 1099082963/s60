@extends('home/layouts/master')
<style>
    .yueduRz{
        background-color: #F9F8F4;
    }
    .base{
        margin-left:150px;
        border-bottom:1px solid #ccc;
        margin-bottom:10px;
    }
</style>
@section('main')
    <div class="container-fluid yueduRz">
        <div class="container">
            <div class="row">
                <div class="col-md-2 sidebar">
                    @yield('icon')
                    <ul class="nav navbar-nav">
                        @foreach($authornav as $v)
                            <li><a href="{{url($v['url'])}}">{{$v['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-10">
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
@endsection