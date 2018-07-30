<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::namespace('Api')->group(function () {
    // 在 "App\Http\Controllers\Api" 命名空间下的控制器
    Route::get('shop/list','ShopController@list');
    Route::get('shop/index','ShopController@index');

//前端注册，验证，登录
    Route::any('member/reg','MemberController@reg');
    Route::any('member/sms','MemberController@sms');
    Route::any('member/login','MemberController@login');

    //修改密码
    Route::any('member/setPassword','MemberController@setPassword');

    //收货地址管理
    Route::any('address/add','AddressController@add');
    Route::any('address/list','AddressController@list');
    Route::any('address/edi','AddressController@edi');
    Route::any('address/edit','AddressController@edit');

});
