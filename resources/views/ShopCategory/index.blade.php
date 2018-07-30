@extends("admin.layouts.admin.default")
@section("title","商家分类管理")
@section("content")
    <br>
      <a href="{{route('ShopCategory.add')}}" class="btn btn-info">添加商家分类</a><br><br>
    <table class="table tab-content">
        <tr>
            <th>分类编号</th>
            <th>分类</th>
            <th>图片</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        @foreach($shops as $shop)
            <tr>
                <td>{{$shop->id}}</td>
                <td>{{$shop->name}}</td>
                <td><img src="{{$shop->img}}" alt="图片加载失败" width="50" height="50"></td>
                <td>{{$shop->status}}</td>
                <td>
                    <a href="{{route('ShopCategory.edit',$shop)}}" class="btn btn-default">编辑</a>
                    <a href="{{route('ShopCategory.del',$shop)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$shops->links()}}
@endsection