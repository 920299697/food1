@extends("admin.layouts.admin.default")
@section('title','管理员注册')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>名字</label>
            <input type="text" name="name" class="form-control" placeholder="亲输入用户名">
        </div>
        <div class="form-group">
            <label>密码</label>
            <input type="password" name="password" class="form-control" placeholder="亲输入密码">
        <div class="form-group">

        <div class="form-group">
            <label>图片</label>
            <input type="file" name="img">
        </div>
        <button type="submit" class="btn btn-default">提交</button>
        <br><br><br><br><br><br>
    </form>
@endsection