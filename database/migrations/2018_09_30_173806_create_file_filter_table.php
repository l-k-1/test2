<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_filter', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('file_id')->unsigned()->defoult(1);
            $table->foreign('file_id')->references('id')->on('files');

            $table->integer('filter_id')->unsigned()->defoult(1);
            $table->foreign('filter_id')->references('id')->on('filters');

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
        Schema::dropIfExists('file_filter');
    }
}
