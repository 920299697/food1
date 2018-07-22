@extends("admin.layouts..admin.default")
@section('title','添加商家')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>分类</label>
            <select name="shop_category_id" class="form-control">
                <option value="1">快餐</option>
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
            <label>评分</label>
            <input type="text" class="form-control" name="shop_rating">
        </div>
        <div class="form-group">
            <label>是否品牌</label>
            <select name="brand" class="form-control">
                <option value="1">是</option>
                <option value="0">否</option>
            </select>
        </div>
        <div class="form-group">
            <label>是否准时送达</label>
            <select name="on_time" class="form-control">
                <option value="1">是</option>
                <option value="0">否</option>
            </select>
        </div>

        <div class="form-group">
            <label>是否蜂鸟配送</label>
            <select name="niao" class="form-control">
                <option value="1" >是</option>
                <option value="0" >否</option>
            </select>
        </div>

        <div class="form-group">
            <label>是否保标记</label>
            <select name="bao" class="form-control">
                <option value="1" >是</option>
                <option value="0" >否</option>
            </select>
        </div>
        <div class="form-group">
            <label>是否票标记</label>
            <select name="piao" class="form-control">
                <option value="1" >是</option>
                <option value="0" >否</option>
            </select>
        </div>

        <div class="form-group">
            <label>是否准标记</label>
            <select name="zhun" class="form-control">
                <option value="1" >是</option>
                <option value="0" >否</option>
            </select>
        </div>

        <div class="form-group">
            <label>起送金额</label>
            <input type="text" class="form-control" name="start_send" >
        </div>

        <div class="form-group">
            <label>配送费</label>
            <input type="text" class="form-control" name="start_cost" >
        </div>

        <div class="form-group">
            <label>店公告</label>
            <textarea name="notice"></textarea>
        </div>

        <div class="form-group">
            <label>优惠信息</label>
            <textarea name="discount"></textarea>
        </div>

        <div class="form-group">
            <label>状态</label>
            <select name="status" class="form-control">
                <option value="1" >正常</option>
                <option value="0">待审核</option>
                <option value="-1">禁用</option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection