
<table class="table table-striped" id="historytable">
    <tr>
        <th>充值总额</th>
        <th>花费总额</th>
        <th>所剩总额</th>
        <th>所得积分</th>

        <th>所用积分</th>

        <th>所剩积分</th>
    </tr>
    <tr>
        <td>{{$money}}元</td>

        <td>{{$dismoney}}元</td>
        <td>{{($money-$dismoney)}}元</td>
        <td>{{$getcore}}分</td>
        <td>{{$discore}}分</td>
        <td>{{($getcore-$discore)}}分</td>

    </tr>
</table>

