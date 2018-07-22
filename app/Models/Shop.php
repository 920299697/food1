<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //设置可修改字段
    public $fillable=['shop_category_id',
'shop_name','shop_img','shop_rating','brand','on_time','niao',
'bao','piao','zhun','start_send','send_cost','notice','discount','status'];

    //连表
    public function shops(){
        return $this->belongsTo(ShopCategory::class,'shop_category_id');
    }
}
