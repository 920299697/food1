<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    //添加可修改字段
    public $fillable=['name','img','status'];
}
