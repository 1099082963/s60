
    <div class="main">
        <form action="{{asset(url('admin/books/add'))}}" method='post'>
            {{csrf_field()}}
            <fieldset>
                <legend> 新增分类 </legend>
                分类名: <input type="text" name='name'> <br><br>
                pid: <input type="text" name='pid' value="{{$pid = isset($id) ? $id : 0}}" readonly> <br><br>
                path: <input type="text" name='path' value="{{$path = isset($path) ? $path.$pid.',' : '0'.','}}" readonly> <br><br>
                性别:
                <label for="y"><input id="y" type="radio" name='display' value='1'>显示</label>
                <label for="n"><input id="n" type="radio" name='display' value='2'>隐藏</label>
                <br><br>
                <input type="submit" value='添加'>
            </fieldset>
        </form>
    </div>
