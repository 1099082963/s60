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
        @if(session('bookrollserror'))
            <script>
                alert(" 请先添加章节再进行修改！");
            </script>
        @endif
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


            </script>
            <div class="form-group">
                <label for="exampleInputEmail1">卷名：</label><br>
                <input type="text" name="newrollname"  class="form-control" id="newrollname" >
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("newrollname")}}
                    @endif
                </span>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">章节数：</label><br>
                <input type="text" name="newchapterssum"  class="form-control" id="newchapterssum">
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("newchapterssum")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">章名：</label><br>

                <input type="text" name="newchaptername"  class="form-control"  id="newchaptername" >
                <span class="error">
                    @if(count($errors))
                        {{$errors->first("newchaptername")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">章节内容：</label><br>
                <textarea type="text" name="site"  class="form-control" id="textarea" ></textarea>
            </div>
            <span class="error">
                    @if(count($errors))
                    {{$errors->first("site")}}
                @endif
            </span>
            <script>
                $(function() {

                        $('#bookrolls1').change(function () {
                            $id = $(this).val();
                            $.get('/home/author/catechapt/' + $id, function (data) {
                                $('#bookrolls2').empty();
//
                                for (var i = 0; i < data.length; i++) {

                                    $('#bookrolls2').append("<option value='" + data[i].id + "'>" + data[i].chaptersname + "</option>");


                                }
                                $('#bookrolls2').change(function(){
                                    $id = $(this).val();
//                            alert($id);
                                    $.get('/home/author/catesite/' + $id, function (chapter) {
                                        for (var i = 0; i < chapter.length; i++) {
//                                    console.log(chapter[i]['site']);
                                            $('#textarea').val(chapter[i].site);

                                            $('#newchaptername').val(chapter[i].chaptersname);
                                        }
                                    });
//
                                        $id=$('#bookrolls1').val()
                                        $.ajax({
                                            url:"{{url('home/author/juan')}}",
                                            data:'id='+$id,
                                            type:'get',
                                            success:function(data){
//                                                console.log(data);
                                                $('#newrollname').val(data.bookrollsname);
                                                $('#newchapterssum').val(data.chapterssum);
                                            },
                                            error:function(){
                                                alert('错误');
                                            },
                                            datatype:'text'

                                        })
                                    })
//
                                $('#bookrolls2').trigger('change');
//
                            });
                        })
                    $('#bookrolls1').trigger('change');


                })
            </script>
            <button type="submit" class="btn btn-default">修改</button>
        </form>
    </div>
@endsection