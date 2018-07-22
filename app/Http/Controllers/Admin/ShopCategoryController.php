<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShopCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopCategoryController extends Controller
{
    //展示主页
    public function index(Request $request)
    {
        //接受值
        $data=$request->get('keyword');
        $shops=ShopCategory::paginate(3);
        //显示试图，传递数据
        return view('ShopCategory.index',compact('shops','data'));
    }

    public function add(Request $request)
    {
        //判断提交方式
        if($request->isMethod('post')) {
            //接受数据
            $data=$request->post();
            //保存图片路径
            $data['img']=$request->file('img')->store('ShopCategory','images');
            //，将数据写入数据库
            ShopCategory::create($data);

            //跳转回主页
            return redirect()->route('ShopCategory.index');

        }

        //展示添加页面
        return view('ShopCategory.add');

    }

    //编辑
    public function edit(Request $request,$id)
    {
        //根据id找到这条数据
        $shop=ShopCategory::find($id);
//        dd($shop);
        //判断提交方式
        if($request->isMethod('post')){
            //接收数据
            $data=$request->post();

            if ($request->file('img')){
                $data['img']=$request->file('img')->store('ShopCategory','images');
            }
//            dd($data);
            //将数据写入数据库
            $shop->update($data);
            //跳转回首页
            return redirect()->route('ShopCategory.index');
        }

        //回显数据
        return view('ShopCategory.edit',compact('shop'));
    }
    
    //删除
    public function del(Request $request,$id)
    {
        $shop=ShopCategory::find($id);
        $shop->delete();
        return redirect()->route('ShopCategory.index');
        
    }

}
