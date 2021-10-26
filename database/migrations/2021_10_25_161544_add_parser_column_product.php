<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParserColumnProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('offer_id')->nullable();
            $table->integer('category_id_price')->nullable();
            $table->integer('source')->nullable();
            $table->string('hash', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('offer_id');
            $table->dropColumn('category_id_price');
            $table->dropColumn('source');
            $table->dropColumn('hash');
        });
    }
}
