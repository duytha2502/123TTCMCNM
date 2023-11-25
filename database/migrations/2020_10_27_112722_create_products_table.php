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
        Schema::create('product', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->string('description');
            $table->string('baohanh');
            $table->string('size');
            $table->boolean('trangthai')->default(1);
            $table->text('content')->nullable();
            $table->timestamps();
            $table->integer('idcat')->unsigned()->nullable();
            $table->foreign('idcat')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
