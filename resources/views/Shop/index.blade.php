@extends("admin.layouts.admin.default")
@section("title","商家管理")
@section("content")
    <br>
    <a href="{{route('Shop.add')}}" class="btn btn-info">添加商家</a><br><br>
    <table class="table tab-content">
        <tr>
            <th>分类</th>
            <th>店名</th>
            <th>店铺图片</th>
            <th>评分</th>
            <th>是否是品牌</th>
            <th>是否准时送达</th>
            <th>是否蜂鸟配送</th>
            <th>有无保险</th>
            <th>有无发票</th>
            <th>有无准标记</th>
            <th>起送金额</th>
            <th>配送费</th>
            <th>店公告</th>
            <th>优惠信息</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        @foreach($shops as $shop)
            <tr>
                <td>{{$shop->shops->name}}</td>
                <td>{{$shop->shop_name}}</td>
                <td><img src="/uploads/{{$shop->shop_img}}" alt="" width="50" height="50"></td>
                <td>{{$shop->shop_rating}}</td>
                <td>{{$shop->brand?'是':'否'}}</td>
                <td>{{$shop->on_time?'是':'否'}}</td>
                <td>{{$shop->niao?'是':'否'}}</td>
                <td>{{$shop->bao?'有':'无'}}</td>
                <td>{{$shop->piao?'有':'无'}}</td>
                <td>{{$shop->zhun?'有':'无'}}</td>
                <td>{{$shop->start_send}}</td>
                <td>{{$shop->start_cost}}</td>
                <td>{{$shop->notice}}</td>
                <td>{{$shop->discount}}</td>
                <td>{{$shop->status?'正常':'待审核'}}</td>
                <td>
                    <a href="{{route('Shop.edit',$shop)}}" class="btn btn-default">编辑</a>
                    <a href="{{route('Shop.del',$shop)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$shops->links()}}
@endsection