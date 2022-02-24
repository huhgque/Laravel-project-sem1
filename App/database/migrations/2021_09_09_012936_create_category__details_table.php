<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category__details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate')->unsigned();
            $table->bigInteger('cate_mini')->unsigned();
            $table->timestamps();
            $table->foreign('cate')->references('id')->on('categories');
            $table->foreign('cate_mini')->references('id')->on('category_minis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category__details');
    }
}
