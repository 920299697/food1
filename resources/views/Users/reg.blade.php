@extends("admin.layouts.home.default")
@section('title','商家注册')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>用户名</label>
            <input type="text" name="name" class="form-control" placeholder="亲输入用户名">
        </div>
        <div class="form-group">
            <label>密码</label>
            <input type="password" name="password" class="form-control" placeholder="亲输入密码">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="亲输入电子邮箱">
        </div>
        <div class="form-group">
            <label>分类</label>
            <select name="shop_category_id" class="form-control">
                @foreach($cates as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>店名</label>
            <input type="text" class="form-control" name="shop_name">
        </div>
        <div class="form-group">
            <label>店铺图片</label>
            <input type="file" name="shop_img">
        </div>
        <div class="form-group">
            <input type="checkbox" value="1" name="brand">加入XX品牌
            <input type="checkbox" value="1" name="on_time">准时送达
            <input type="checkbox" value="1" name="niao">蜂鸟
            <input type="checkbox" value="1" name="bao">保
            <input type="checkbox" value="1" name="piao">票
            <input type="checkbox" value="1" name="zhun">准
        </div>

        <div class="form-group">
            <label>起送金额</label>
            <input type="text" class="form-control" name="start_send">
        </div>

        <div class="form-group">
            <label>配送费</label>
            <input type="text" class="form-control" name="start_cost">
        </div>

        <div class="form-group">
            <label>店公告</label>
            <textarea name="notice"></textarea>
        </div>

        <div class="form-group">
            <label>优惠信息</label>
            <textarea name="discount"></textarea>
        </div>
        <button type="submit" class="btn btn-default">提交</button>
        <br><br><br><br><br><br>
    </form>
@endsection