@extends('home/author/master')
@section('name',session('name'))
<style>
    #exampleInputEmail1{
        width:300px;
        display:inline-block;
    }
    .error{
        color:red;
    }
    #textarea{
        height: 300px;
    }
    #bookrolls1,#bookrolls2,#newrollname,#newchaptername,#newchapterssum{
        width: 200px;
        display:inline-block;
    }
</style>

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">
@endsection
@section('content')
    <div class="info">
        <form action="" method="post">
            {{csrf_field()}}


            <div class="form-group">
                <label for="exampleInputEmail1">选择卷：</label><label for="exampleInputEmail1" style="margin-left:150px;">选择章：</label><br>
                <select class="form-control type" name="bookrolls" id="bookrolls1">
                    @foreach($bookrolls as $v)
                        <option   value="{{$v['id']}}">{{$v['bookrollsname']}}</option>
                    @endforeach
                </select>

                <select class="form-control type" name="bookchapters" id="bookrolls2">

                </select>
            </div>
            <script>
                $(function() {
                    $('#bookrolls1').change(function () {
                        $id = $(this).val();
                        $.get('/home/author/catechapt/' + $id, function (data) {
                            $('#bookrolls2').empty();
                            $('#bookrolls2').append("<option   value='all'>全部章节</option>");
                            for (var i = 0; i < data.length; i++) {
                                $('#bookrolls2').append("<option value='" + data[i].id + "'>" + data[i].chaptersname + "</option>");
                            }
                        });
                    })
                    $('#bookrolls1').trigger('change');
                })
            </script>
            <button type="submit" class="btn btn-default">删除</button>
        </form>
    </div>
@endsection