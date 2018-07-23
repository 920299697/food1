@extends("admin.layouts.home.default")
@section("title","菜品分类管理")
@section("content")
    <br>
      <a href="{{route('menuCategory.add')}}" class="btn btn-info">添加菜品分类</a><br><br>
    <table class="table tab-content">
        <tr>
            <th>分类编号</th>
            <th>分类</th>
            <th>所属商家</th>
            <th>简介</th>
            <th>操作</th>
        </tr>
        @foreach($menus as $menu)
            <tr>
                <td>{{$menu->id}}</td>
                <td>{{$menu->name}}</td>
                <td>{{$menu->shop_id}}</td>
                <td>{{$menu->description}}</td>
                <td>
                    <a href="{{route('menuCategory.edit',$menu)}}" class="btn btn-default">编辑</a>
                    <a href="{{route('menuCategory.del',$menu)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$menus->links()}}
@endsection