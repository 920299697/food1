@extends("admin.layouts.home.default")
@section("title","菜品分类管理")
@section("content")
    <br>
    <a href="{{route('menu.add')}}" class="btn btn-info">添加菜品</a><br><br>
    <table class="table tab-content">
        <tr>
            <th>菜品编号</th>
            <th>名称</th>
            <th>所属分类</th>
            <th>所属商家</th>
            <th>评分</th>
            <th>价格</th>
            <th>描述</th>
            <th>月销量</th>
            <th>菜品图片</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        @foreach($menus as $menu)
            {{--@foreach($cates as $cate)--}}
                {{--@foreach($shops as $shop)--}}
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>

                        <td>{{$menu->category_id}}</td>
{{--                        <td>{{$cate->id==$menu->category_id?$cate->name:''}}</td>--}}


                        <td>{{$menu->shop_id}}</td>
{{--                        <td>{{$shop->id==$menu->shop_id?$shop->shop_name:''}}</td>--}}


                        <td>{{$menu->rating}}</td>
                        <td>{{$menu->money}}</td>
                        <td>{{$menu->description}}</td>
                        <td>{{$menu->month_sales}}</td>
                        <td><img src="/uploads/{{$menu->menu_img}}" alt="图片加载失败" width="50" height="50"></td>
                        <td>{{$menu->status?'在售':'沽清'}}</td>
                        <td>
                            <a href="{{route('menu.edit',$menu)}}" class="btn btn-default">编辑</a>
                            <a href="{{route('menu.del',$menu)}}" class="btn btn-danger">删除</a>
                        </td>
                    </tr>
        @endforeach
    </table>
    {{$menus->links()}}
@endsection