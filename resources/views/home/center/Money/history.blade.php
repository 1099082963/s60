<table class="table table-striped" id="historytable" width="500px">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>充值</th>
        <th>积分</th>
        <th>时间</th>
        <th>操作</th>
    </tr>

    @foreach($list as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->money}}元</td>
            <td>{{$v->core}}元</td>
            <td>{{$v->createtime}}</td>
            <td><button type="button" class="btn btn-danger">删除</button></td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3">充值总额：{{$money}}元</td>
        <td colspan="3">充值累积积分：{{$getcore}}分</td>
    </tr>
    <script>
        $(function(){
            $('#historytable button').click(function(){
//                alert(1);
                switch($(this).html()){
                    //请求一个string响应
                    case '删除':
                        var id=$(this).parent().parent().children().html();
//                        alert(id);


                        $.ajax({

                            url:'center/Money/history/'+id,
                            type:'get',
                            success:function(data){
                                $('#historytable button').parent().parent().parent().html(data);
                            },
                            error:function(data){
                                alert('内部错误');
                            }
                        })
                        break;
                }
            })
        })
    </script>

</table>
