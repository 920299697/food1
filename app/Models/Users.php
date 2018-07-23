<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    //设置可修改字段
    public $fillable=['name','password','email','status','shop_id','shop_category_id',
        'shop_name','shop_img','shop_rating','brand','on_time','niao',
        'bao','piao','zhun','start_send','send_cost','notice','discount','status'];
}
