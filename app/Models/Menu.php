<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //设置可修改字段
    public $fillable=['name','category_id','shop_id','rating','money','description','month_sales','menu_img','status'];
}
