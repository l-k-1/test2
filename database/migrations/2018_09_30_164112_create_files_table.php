<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title',255);
            $table->string('alias',255)->unique();
            $table->text('description');
            $table->text('text');
            $table->string('img',255);
            $table->string('link_site',255);
            $table->string('file_path',255);
            $table->string('file_torrent_path',255);
            $table->integer('user_id')->unsigned()->defoult(1);
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('files');
    }
}
