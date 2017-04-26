@extends('home/author/master')

@section('name',session('name'))


<style>
    #exampleInputEmail1{
        display:inline-block;
        width:400px;
    }
    .error{
        color:red;
    }
    textarea{
        vertical-align: top;
    }
    #bookstype1,#bookstype2{
        width: 200px;
        display:inline-block;
    }
    .selected{
        display:block;
    }
</style>

@section('icon')
    <img style="border-radius:50%" src="{{url($author['icon'])}}" width="100px" height="100px">
@endsection
@section('content')
    <div class="">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">作品分类：</label><br>
                <select class="form-control type" name="input_1j" id="bookstype1">
                    @foreach($cate1 as $v)
                        <option  value="{{$v['id']}}">{{$v['name']}}</option>
                    @endforeach
                </select>
                <select class="form-control type" name="input_2j" id="bookstype2">
                </select>
                <script>
                    $(function() {
//            window.onload = function () {
                        $('#bookstype1').change(function () {
                            $id = $(this).val();
                            $.get('/home/author/createbooks/' + $id, function (data) {
                                $('#bookstype2').empty();
                                for (var i = 0; i < data.length; i++) {
                                    $('#bookstype2').append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
                                }
                            });

                        })
                        $('#bookstype1').trigger('change');
//            }
                    })
                </script>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">作品书名：</label><br>
                <input type="text" name="booksName" class="form-control" id="exampleInputEmail1">
                <span class="error">
                @if(count($errors))
                        {{$errors->first("booksName")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">封面：</label><br>
                <input type="file" name="icon" id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">作者（可以写笔名）：</label><br>
                <input type="text" name="author_name" class="form-control" id="exampleInputEmail1" value="{{$author['name']}}">
                <span class="error">
                @if(count($errors))
                        {{$errors->first("author_name")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">价格：</label><br>
                <input type="text"  name="price" class="form-control" id="exampleInputEmail1" placeholder="0.00即是免费">
                <span class="error">
                @if(count($errors))
                        {{$errors->first("price")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">标签：</label><br>
                <input type="text"  name="label" class="form-control" id="exampleInputEmail1">
                <span class="error">
                @if(count($errors))
                        {{$errors->first("label")}}
                    @endif
                </span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">描述：</label><br>
                <textarea type="text"  name="desc" class="form-control" id="exampleInputEmail1"></textarea>
                <span class="error">
                @if(count($errors))
                        {{$errors->first("desc")}}
                    @endif
                </span>
            </div>
            <input type="hidden" name="copyright" value="正新出版社">
            <input type="hidden" name="author_id" value="{{$author['id']}}">
            <input type="hidden" name="registime" value="{{time()+28800}}">
            <button type="submit" class="btn btn-default">建立作品</button>
        </form>
    </div>


@endsection