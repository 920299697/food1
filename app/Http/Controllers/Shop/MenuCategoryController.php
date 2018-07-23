<?php

namespace App\Http\Controllers\Shop;

use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuCategoryController extends Controller
{
    //主页
    public function index()
    {
        $menus=MenuCategory::paginate(3);
        return view('menuCategory.index',compact('menus'));
    }
    //添加分类
    public function add(Request $request){
        if($request->isMethod('post')){
            $data=$request->post();
            MenuCategory::create($data);
            return redirect()->route('menuCategory.index');
        }
        return view('menuCategory.add');
    }
    //修改分类
    public function edit(Request $request,$id){
        //得到这条数据
        $menu=MenuCategory::find($id);
        //判断提交方式
        if ($request->isMethod('post')){
            //接受数据
            $data=$request->post();
            $menu->update($data);
            //跳转回主页
            return redirect()->route('menuCategory.index');
        }
        return view('menuCategory.edit',compact('menu'));
    }
    public function del(Request $request,$id){
        $menu=MenuCategory::find($id);
        $menu->delete();
        return redirect()->route('menuCategory.index');
    }
}
