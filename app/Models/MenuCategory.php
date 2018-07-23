<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    //设置可修改字段
    public $fillable=['name','shop_id','description','status'];
}
