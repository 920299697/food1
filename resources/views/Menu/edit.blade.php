@extends("admin.layouts.home.default")
@section('title','添加菜品')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>菜名</label>
            <input type="text" class="form-control" name="name" placeholder="请输入菜名" value="{{$menu->name}}">
        </div>
        <div class="form-group">
            <label>所属分类</label>
            <select name="category_id" class="form-control">
                @foreach($cates as $cate)
                    <option value="{{$cate->id}}" {{$cate->id==$menu->category_id?'selected':''}}>{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>所属商家</label>
            <select name="shop_id" class="form-control">
                @foreach($shops as $shop)
                    <option value="{{$shop->id}}" {{$shop->id==$menu->shop_id?'selected':''}}>{{$shop->shop_name}}</option>
                @endforeach
            </select>
            {{--<input type="text" class="form-control" name="shop_id" placeholder="请输入商家" value="{{$menu->shop_id}}">--}}
        </div>
        <div class="form-group">
            <label>价格</label>
            <input type="text" class="form-control" name="money" placeholder="请输入价格" value="{{$menu->money}}">
        </div>
        <div class="form-group">
            <label>描述</label>
            <input type="text" class="form-control" name="description" placeholder="请输入简介" value="{{$menu->description}}">
        </div>

        <div class="form-group">
            <label>图片</label>
            <input type="file" name="menu_img">
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection