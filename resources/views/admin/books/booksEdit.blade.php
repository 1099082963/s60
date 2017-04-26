<div class="main">
    @foreach($data as $v)
    <form action="" method="post">
        {{csrf_field()}}
        <input type="hidden" name='id' value='{{$v->id}}'>
        <p>分类名: <input type="text" name="name" value="{{$v->name}}"></p>
        <p>Pid: <input type="text" name="pid" value="{{$v->pid}}" readonly></p>
        <p>Path: <input class="touxiang" type="text" name="path" value="{{$v->path}}" readonly></p>

        <p>
            <label for="y"><input id="y" class="xinb" type="radio" name='display' value='1' {{$v->display == 1?'checked':''}}>显示</label>
            <label for="n"><input id="n" class="xinb" type="radio" name='display' value='2' {{$v->display == 2?'checked':''}}>隐藏</label>
        </p>
        <input type="submit" value='修改'>
    </form>
    @endforeach
</div>