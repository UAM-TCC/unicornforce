<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RcTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rc_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('smartphone_id');
            $table->integer('rc_node');
            $table->integer('rc_python');
            $table->integer('rc_c');
            $table->integer('rc_java');
            $table->integer('rc_php');
            $table->integer('rc_mysql');
            $table->integer('arduino');
            $table->float('rc_average', 8, 2);
            $table->foreign('smartphone_id')->references('id')->on('smartphones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rc_tests');
    }
}
