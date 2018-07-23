<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use App\Models\ShopCategory;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //注册页面
    public function reg(Request $request)
    {
        //判断提交方式
        if ($request->isMethod('post')) {
            //验证
//            $this->validate($request, [
//                'shop_category_id' => 'required|interger',
//                'shop_name' => 'required|max:100|unique:shops',
//                'shop_img' => 'image|required',
//                'start_send' => 'required|numeric',
//                'send_cost' => 'required|numeric',
//                'notice' => 'string',
//                'discount' => 'string',
//                'name' => 'required|unique:users\'',
//                'email' => 'required|email|unique:users',
//                'password' => 'required|string|min:3|max:32|confirmed'
//            ]);

            //更新店铺表
            $shop = new Shop();
            //设置店铺状态为0
            $shop->status = 0;
            $shop->shop_img = "";
            //接收数据，批量赋值
            $shop->fill($request->input());
            //图片上传
            $file = $request->file('shop_img');
            //判断是否上传了图片
            if ($file) {
                //存在就上传
                $shop->shop_img = $file->store('/uploads/images/shop', 'images');
            }
            //开启事务
            DB::transaction(function () use ($shop, $request) {
                //保存商家信息
                $shop->save();
                //添加用户信息
                Users::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'shop_id' => $shop->id,
                    'password' => bcrypt($request->input('password')),
                    'status' => 1,
                ]);
            });

            //添加成功
            session()->flash('success', '注册成功');
            //跳转到登录页
            return redirect()->route('Users.login');
        }
        //得到所有商家分类
        $cates = ShopCategory::where("status", 1)->get();
        return view('Users.reg', compact('cates'));
    }

    //登录
    public function login(Request $request)
    {
        //判断提交方式
        if ($request->isMethod('post')) {
            //验证数据
            if (Auth::guard('admin')->attempt(['name' => $request->post('name'), 'password' => $request->password], $request->has('remember'))) {
                //提示
                $request->session()->flash("success", "登录成功");
//                $user=Auth::user();
//                dd($user);
                $name = $request->post('name');
                $request = DB::select("select * from users where name='{$name}'");
//                dd($result);
                //跳转
                return redirect()->intended(route('Users.index', compact('request')));
            } else {
                $request->session()->flash("danger", "账号或密码错误");
                return redirect()->back()->withInput();

            }

        }
        return view('Users.login');
    }

    //设置两个中间件
    public function __construct()
    {
        //添加保安
        $this->middleware('auth', [
            'except' => ['login', 'index','reg']
        ]);
        //再添加一个login自己有guest才能访问
        $this->middleware('guest', [
            'only' => ['login']
        ]);
    }

    //退出登录
    public function logout(Request $request)
    {
        //清除登陆信息
        Auth::logout();
        $request->session()->flash('success', '注销成功');
        //跳转
        return redirect()->route('Users.login');
    }

    public function index(Request $request)
    {
        //接收数据
        $users=$request->post();
        $user=$users['request'][0];
//        dd($user);
        return view('Users.index',['user'=>$user]);
    }

    //修改密码
    public function edit(Request $request)
    {
        //根据id取得这条数据
//        dd($id);
//        $user=Users::find($id);
//        //判断提交方式
//        if ($request->isMethod('post')){
//            //接受数据
//            $data=$request->post();
//            //给密码加密
//            $data['password']=bcrypt($data['password']);
//            //修改密码
//            $user->update($data);
//            //跳回主页
//            return redirect()->route('Users.index');
//        }
        //展示试图
        return view('Users.edit');
    }


}
