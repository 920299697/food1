<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('菜品名');
            $table->integer('category_id')->comment('所属分类');
            $table->integer('shop_id')->comment('所属商家');
            $table->float('rating')->comment('评分');
            $table->decimal('money')->comment('价格');
            $table->string('description')->comment('描述');
            $table->integer('month_sales')->comment('月销量');
            $table->string('menu_img')->comment('菜品图片');
            $table->integer('status')->comment('状态：1上架 0下架');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
