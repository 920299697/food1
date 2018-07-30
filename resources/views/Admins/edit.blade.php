@extends("admin.layouts.admin.default")
@section('title','修改密码')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>修改密码</label>
            <input type="password" class="form-control" name="name" placeholder="请输入新密码">
        </div>
            <label>确认密码</label>
            <div class="form-group">
            <input type="password" class="form-control" name="name" placeholder="确认新密码">
        </div>
        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection