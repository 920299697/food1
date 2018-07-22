@extends("admin.layouts.admin.default")
@section('title','添加商家分类')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>分类名</label>
            <input type="text" class="form-control" name="name" placeholder="请输入分类">
        </div>
        <div class="form-group">
            <label>状态</label>
            <select name="status" class="form-control">
                <option value="1">显示</option>
                <option value="0">隐藏</option>
            </select>
        </div>
        <div class="form-group">
            <label>上传图片</label>
            <input type="file" name="img">
        </div>
        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection