<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('cliname');
            $table->string('clitel');
            $table->string('clisour');
            $table->string('cliadd');
            $table->string('carnum');
            $table->string('carcontract');
            $table->string('carturnover');
            $table->string('carconsultant');
            $table->integer('num');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->string('date');
            $table->string('week');
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
        Schema::dropIfExists('car');
    }
}
