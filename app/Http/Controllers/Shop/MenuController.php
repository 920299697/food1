<?php

namespace App\Http\Controllers\Shop;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index(){
        $menus = Menu::paginate(3);
        $cates=MenuCategory::where("status",1)->get();
        $shops=Shop::where("status",1)->get();
        return view('menu.index',compact('menus','cates','shops'));
//        return view('menu.index');
    }
    //添加
    public function add(Request $request)
    {
        //判定提交方式
        if($request->isMethod('post')){
            //接收数据
            $data=$request->post();
            $data['menu_img']=$request->file('menu_img')->store('/uploads/images/menu','images');

            Menu::create($data);
            return redirect()->route('menu.index');
        }
        $cates=MenuCategory::where("status",1)->get();
        $shops=Shop::where("status",1)->get();
        return view('menu.add',compact('cates','shops'));
    }

    //编辑
    public function edit(Request $request,$id)
    {
        $menu=Menu::find($id);
        //判定提交方式
        if($request->isMethod('post')){
            //接收数据
            $data=$request->post();
            if ($request->file('menu_img')){
            $data['menu_img']=$request->file('menu_img')->store('/uploads/images/menu','images');
            }
            $menu->update($data);
            return redirect()->route('menu.index');
        }
        $cates=MenuCategory::where("status",1)->get();
        $shops=Shop::where("status",1)->get();
        return view('menu.edit',compact('menu','cates','shops'));

    }

    //删除
    public function del(Request $request,$id)
    {
        $menu=Menu::find($id);
        $menu->delete();

        return redirect()->route('menu.index');


    }

}
