@extends("admin.layouts.home.default")
@section("title","个人主页")
@section("content")
    <br>
    <h3>个人中心</h3>
    <br>
    {{--<a href="#" class="btn btn-info">我要开店</a><br><br>--}}
    <table class="table tab-content">
        <tr>
            <td>姓名</td>
            <td>{{$user['name']}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>我的状态</td>
            <td>{{$user['status']?'正常':'待审'}}</td>
        </tr>
        <tr>
            <td>我的店铺</td>
            <td>{{$user['shop_id']}}</td>
        </tr>
        <tr>
            <td>店铺状态</td>
            <td>待审核</td>
        </tr>

    </table>
@endsection