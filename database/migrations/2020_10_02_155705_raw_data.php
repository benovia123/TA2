<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RawData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawData', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->string('month');
            $table->string('section');
            $table->string('category');
            $table->string('advertiser');
            $table->string('mothercorp');
            $table->string('product');
            $table->bigInteger('tv');
            $table->bigInteger('press');
            $table->bigInteger('magazine');
            $table->bigInteger('total');
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
        //
    }
}
