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
            $table->string('product_slug');
            $table->integer('categories_id');
            $table->integer('sub_categories_id')->nullable();
            $table->string('author_manufactural_name')->nullable();
            $table->text('description')->nullable();
            $table->string('size')->nullable();
            $table->string('sku');
            $table->integer('quantity');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->text('featured');
            $table->integer('brands_id')->nullable();
            $table->string('featured_img_sm');
             $table->string('featured_img_lg');

            $table->boolean('status');
            $table->boolean('featured_product');
            $table->text('vedio_link')->nullable();
            $table->string('product_image')->nullable();
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
