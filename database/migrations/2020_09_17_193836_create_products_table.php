<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('product_code')->unique()->nullable();
            $table->string('product_name');
            $table->string('sku')->unique();
            $table->string('price_hint');
            $table->integer('buy_price');
            $table->integer('sell_price');
            $table->integer('barcode');
            $table->integer('product_category');
            $table->integer('brand_name');
            $table->integer('measure_unit');
            $table->integer('opeing_stock')->nullable();
            $table->integer('warranty_period')->nullable();

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
