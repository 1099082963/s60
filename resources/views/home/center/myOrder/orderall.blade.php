<table class="table table-striped" id="historytable" width="500px">
    <tr>
        <th>订单id</th>
        <th>书籍名</th>
        <th>支付用户</th>
        <th>订单编号</th>
        <th>联系电话</th>
        <th>支付金额</th>
        <th>下单时间</th>
        <th>支付状态</th>
        <th>操作</th>
    </tr>
{{--    {{dd(count($data))}}--}}
    @if(count($data)==0)
        <tr><td colspan="8" align="center">暂无订单</td></tr>
    @else
            @foreach($data as $ite)
            <tr>
                <td>{{$ite->id}}</td>
                <td>{{$ite->booksName}}</td>
                <td>{{$name}}</td>
                <td>{{$ite->numid}}</td>
                <td>{{$phone}}</td>
                @if(($core-$discore)<$ite->price)
                    <td>{{$ite->price}}元 <input id="price" type="hidden" value="{{$price=$ite->price}}"></td>
                @else
                    <td>{{($ite->price-$ite->price/10)}}元<input id="price" type="hidden" value="{{$ite->price-$ite->price/10}}"></td>
                @endif
                <td>{{$ite->ordertime}}</td>
                <td><button class="pay">{{$ite->ispay==0?'支付':'已支付'}}</button></td>
                <td><button class="cancel">{{$ite->cancel==0?'取消订单':'未取消订单'}}</button></td>
            </tr>
            @endforeach
        @endif
</table>
<script>
    $(function(){
//        $(this).on('click','.pay',function(){
            $('.pay').click(function(){
                $id=$(this).parent().parent().children().first().html();
                $price = $('#price').val();
                $.ajax({
                    url:'{{url('order/pay')}}',
                    type:'post',
                    data:{'_token':'{{csrf_token()}}','id':$id},
                    success:function(data){
                        alert(data);
                        window.location.reload();
                    },
                    error:function(){
                        alert('失败')
                    }
                })
//            })

        });

        $('.cancel').click(function(){
            $id=$(this).parent().parent().children().first().html();
//            alert($id);
            $.ajax({
                url:'{{url('order/cancel')}}',
                type:'post',
                data:{'_token':'{{csrf_token()}}','id':$id},
                success:function(data){
                    alert(data);
                    window.location.reload();
                },
                error:function(){
                    alert('失败')
                }
            })
        })
    })
</script>
