<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RfTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rf_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('smartphone_id');
            $table->float('screen', 8, 2);
            $table->float('touchscreen', 8, 2);
            $table->float('power_button', 8, 2);
            $table->float('other_buttons', 8, 2);
            $table->float('usb', 8, 2);
            $table->float('battery', 8, 2);
            $table->float('audio_output', 8, 2);
            $table->float('audio_input', 8, 2);
            $table->float('camera', 8, 2);
            $table->float('rf_average', 8, 2);
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
        Schema::dropIfExists('rf_tests');
    }
}
