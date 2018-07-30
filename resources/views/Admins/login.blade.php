@extends("admin.layouts.admin.default")
@section('title','登录')
@section('content')
    <form method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>名字</label>
            <input type="text" class="form-control" name="name" placeholder="请输入用户名">
        </div>
        <div class="form-group">
            <label>密码</label>
            <input type="password" class="form-control" name="password" placeholder="请输入密码">
        </div>
        <input type="checkbox" name="remember"> 记住我 <br><br>
        <button type="submit" class="btn btn-default">登录</button>
    </form>
@endsection