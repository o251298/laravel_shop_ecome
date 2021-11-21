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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('name', 255);
            $table->string('code', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->double('price')->default(0);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('recommend')->default(0);
            $table->tinyInteger('hit')->default(0);
            $table->unsignedInteger('count')->default(0);
            $table->integer('show')->default(0);
            $table->integer('offer_id')->nullable();
            $table->integer('category_id_price')->nullable();
            $table->integer('source')->nullable();
            $table->string('hash', 255)->nullable();
            $table->softDeletes();
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
