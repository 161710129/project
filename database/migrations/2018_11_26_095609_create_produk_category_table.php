<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('produk_category', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('produk_id')->unsigned()->nullable();
    $table->integer('category_id')->unsigned()->nullable();
    $table->timestamps();
    $table->foreign('produk_id')->references('id')->on('produks');
    $table->foreign('category_id')->references('id')->on('categories');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_category');
    }
}
