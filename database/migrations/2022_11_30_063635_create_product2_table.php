<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('cate_id');
            $table->integer('subcate_id');
            $table->string('product_name');
            $table->string('slug');
            $table->string('product_code');
            $table->integer('unit_id');
            $table->bigInteger('price');
            $table->integer('discount')->nullable();
            $table->bigInteger('discount_price')->nullable();
            $table->string('thumbnail');
            $table->integer('quantity');
            $table->integer('minimum_qty')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', ['active', 'pending', 'inactive'])->default('active');
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
        Schema::dropIfExists('product2');
    }
};
