@extends("admin.layouts..admin.default")
@section('title','编辑商家')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>分类</label>
            <select name="shop_category_id" class="form-control">
                <option value="{{$shop->shops->id}}">{{$shop->shops->name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label>店名</label>
            <input type="text" class="form-control" name="shop_name" value="{{$shop->shop_name}}">
        </div>
        <div class="form-group">
            <label>店铺图片</label>
            <input type="file" name="shop_img">
        </div>
        <div class="form-group">
            <label>评分</label>
            <input type="text" class="form-control" name="shop_rating" value="{{$shop->shop_rating}}">
        </div>
        <div class="form-group">
            <label>是否品牌</label>
            <select name="brand" class="form-control">
                <option value="1" {{$shop->brand?'selected':''}}>是</option>
                <option value="0" {{$shop->brand?'':'selected'}}>否</option>
            </select>
        </div>
        <div class="form-group">
            <label>是否准时送达</label>
            <select name="on_time" class="form-control">
                <option value="1" {{$shop->on_time?'selected':''}}>是</option>
                <option value="0" {{$shop->on_time?'':'selected'}}>否</option>
            </select>
        </div>

        <div class="form-group">
            <label>是否蜂鸟配送</label>
            <select name="niao" class="form-control">
                <option value="1" {{$shop->niao?'selected':''}}>是</option>
                <option value="0" {{$shop->niao?'':'selected'}}>否</option>
            </select>
        </div>

        <div class="form-group">
            <input type="checkbox" value="1" name="niao" {{$shop->niao?'checked':''}}>蜂鸟
            <input type="checkbox" value="1" name="bao" {{$shop->bao?'checked':''}}>保
            <input type="checkbox" value="1" name="piao" {{$shop->piao?'checked':''}}>票
            <input type="checkbox" value="1" name="zhun" {{$shop->zhun?'checked':''}}>准
        </div>

        <div class="form-group">
            <label>起送金额</label>
            <input type="text" class="form-control" name="start_send" value="{{$shop->start_send}}">
        </div>

        <div class="form-group">
            <label>配送费</label>
            <input type="text" class="form-control" name="start_cost" value="{{$shop->start_cost}}">
        </div>

        <div class="form-group">
            <label>店公告</label>
            <textarea name="notice">{{$shop->notice}}</textarea>
        </div>

        <div class="form-group">
            <label>优惠信息</label>
            <textarea name="discount">{{$shop->discount}}</textarea>
        </div>

        <div class="form-group">
            <label>状态</label>
            <select name="status" class="form-control">
                <option value="1" {{$shop->status?'selected':''}}>正常</option>
                <option value="0" {{$shop->status?'':'selected'}}>待审核</option>
                <option value="-1" {{$shop->status===-1?'selected':''}}>禁用</option>
            </select>
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
@endsection