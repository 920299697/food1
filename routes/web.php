<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//平台
Route::domain('admin.food.com')->namespace('Admin')->group(function () {
    //店铺分类
    Route::get('ShopCategory/index',"ShopCategoryController@index")->name('ShopCategory.index');
    Route::any('ShopCategory/add',"ShopCategoryController@add")->name('ShopCategory.add');
    Route::any('ShopCategory/edit/{id}',"ShopCategoryController@edit")->name('ShopCategory.edit');
    Route::any('ShopCategory/del/{id}',"ShopCategoryController@del")->name('ShopCategory.del');

    //店铺管理
    Route::get('Shop/index',"ShopController@index")->name('Shop.index');
    Route::any('Shop/add',"ShopController@add")->name('Shop.add');
    Route::any('Shop/edit/{id}',"ShopController@edit")->name('Shop.edit');
    Route::any('Shop/del/{id}',"ShopController@del")->name('Shop.del');

});


//商户
Route::domain('shop.ele.com')->namespace('Shop')->group(function () {
    Route::get('user/reg',"UserController@reg");
    Route::get('user/index',"UserController@index");
});
