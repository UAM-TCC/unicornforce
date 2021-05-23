<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RpTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rp_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('smartphone_id');
            $table->float('rp_single', 8, 2);
            $table->float('rp_multiple', 8, 2);
            $table->float('rp_average', 8, 2);
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
        Schema::dropIfExists('rp_tests');
    }
}
