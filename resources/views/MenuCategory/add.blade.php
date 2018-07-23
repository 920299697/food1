@extends("admin.layouts.home.default")
@section('title','添加菜品分类')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>分类名</label>
            <input type="text" class="form-control" name="name" placeholder="请输入分类">
        </div>
        <div class="form-group">
            <label>所属商家</label>
            <input type="text" class="form-control" name="shop_id" placeholder="请输入商家">
        </div>
        <div class="form-group">
            <label>简介</label>
            <input type="text" class="form-control" name="description" placeholder="请输入简介">
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection