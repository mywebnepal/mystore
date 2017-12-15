<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('categories_id');
            $table->text('description')->nullable();
            $table->string('size')->nullable();
            $table->string('sku');
            $table->integer('quantity');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->text('featured');
            $table->string('brand_name')->nullable();
            $table->string('featured_img_sm');
             $table->string('featured_lg');

            $table->boolean('status');
            $table->text('vedio_link')->nullable();
            $table->string('product_image ')->nullable();
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
        Schema::dropIfExists('products');
    }
}
