@extends("admin.layouts.admin.default")
@section("title","个人主页")
@section("content")
    <br>
    <h3>管理员列表</h3>
    <br>
    {{--<a href="#" class="btn btn-info">我要开店</a><br><br>--}}
    <table class="table tab-content">
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>头像</th>
            <th>权限</th>
            <th>操作</th>
        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td><img src="{{$admin->img}}" alt="图片加载失败" width="50"></td>
                <td>{{$admin->status?'最大':'普通'}}</td>
                <td>
                    <a href="{{route('admins.edit',$admin)}}" class="btn btn-default">编辑</a>
                    <a href="{{route('admins.del',$admin)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection