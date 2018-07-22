<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //用户管理页展示
    public function index(Request $request)
    {
        $data=$request->get('keyword');
        $shops = Shop::paginate(3);

        return view('Shop.index',compact('shops','data'));

    }

    //添加
    public function add(Request $request){
        //判断提交方式
        if($request->isMethod('post')) {
            //接受数据
            $data=$request->post();
            //保存图片路径
            $data['shop_img']=$request->file('shop_img')->store('Shops','images');
            //，将数据写入数据库
            Shop::create($data);

            //跳转回主页
            return redirect()->route('Shop.index');

        }

        return view('shop.add');
    }

    //编辑
    public function edit(Request $request,$id){
        //得到要编辑的数据
        $shop=Shop::find($id);
        //得到商品分类
        $class=ShopCategory::all();
        //判断提交方式
        if ($request->isMethod('post')){
            //接收数据
            $data=$request->post();
            if ($request->file('shop_img')){
                $data['shop_img']=$request->file('shop_img')->store('Shops','images');
            }
            //修改数据
            $shop->update($data);
            //跳回主页
            return redirect()->route('Shop.index');
        }

        return view('Shop.edit',compact('shop','class'));
    }

    //删除
    public function del(Request $request,$id)
    {
        $shop=Shop::find($id);
        $shop->delete();
        return redirect()->route('Shop.index');
    }
}
