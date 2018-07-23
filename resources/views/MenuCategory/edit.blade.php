@extends("admin.layouts.home.default")
@section('title','修改菜品分类')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>分类名</label>
            <input type="text" class="form-control" name="name" placeholder="请输入分类" value="{{$menu->name}}">
        </div>
        <div class="form-group">
            <label>所属商家</label>
            <input type="text" class="form-control" name="shop_id" placeholder="请输入商家" value="{{$menu->shop_id}}">
        </div>
        <div class="form-group">
            <label>简介</label>
            <input type="text" class="form-control" name="description" placeholder="请输入简介" value="{{$menu->description}}">
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection