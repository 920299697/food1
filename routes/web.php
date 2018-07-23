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
Route::domain('shop.food.com')->namespace('Admin')->group(function () {
    //商家
    Route::any('Users/reg',"UsersController@reg")->name('Users.reg');
    Route::any('Users/login',"UsersController@login")->name('Users.login');
    Route::get('Users/logout',"UsersController@logout")->name('Users.logout');
    Route::any('Users/index',"UsersController@index")->name('Users.index');
    Route::any('Users/edit',"UsersController@edit")->name('Users.edit');
});

//商户
Route::domain('shop.food.com')->namespace('Shop')->group(function () {
    //菜品分类
    Route::any('MenuCategory/reg',"MenuCategoryController@reg")->name('menuCategory.reg');
    Route::any('MenuCategory/add',"MenuCategoryController@add")->name('menuCategory.add');
    Route::any('MenuCategory/edit/{id}',"MenuCategoryController@edit")->name('menuCategory.edit');
    Route::any('MenuCategory/del/{id}',"MenuCategoryController@del")->name('menuCategory.del');
    Route::any('MenuCategory/login',"MenuCategoryController@login")->name('menuCategory.login');
    Route::get('MenuCategory/logout',"MenuCategoryController@logout")->name('menuCategory.logout');
    Route::get('MenuCategory/index',"MenuCategoryController@index")->name('menuCategory.index');

    //菜品
    Route::any('Menu/reg',"MenuController@reg")->name('menu.reg');
    Route::any('Menu/add',"MenuController@add")->name('menu.add');
    Route::any('Menu/edit/{id}',"MenuController@edit")->name('menu.edit');
    Route::any('Menu/del/{id}',"MenuController@del")->name('menu.del');
    Route::any('Menu/login',"MenuController@login")->name('menu.login');
    Route::get('Menu/logout',"MenuController@logout")->name('menu.logout');
    Route::get('Menu/index',"MenuController@index")->name('menu.index');
});
