<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cellphones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model')->unique();
            $table->string('producer')->nullable();
            $table->string('color');
            $table->date('year_of_manufacture');
            $table->integer('status')->default(1);
            $table->integer('is_tested')->default(0);
            $table->integer('stock')->default(1)->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('picture')->nullable();
            $table->float('final_test_result', 8, 2)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartphones');
    }
}
