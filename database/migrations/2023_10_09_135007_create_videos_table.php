<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_videos', 200)->nullable();
            $table->text('keterangan_videos')->nullable();
            $table->dateTime('waktu_videos')->nullable();
            $table->string('file_videos')->nullable();
            $table->string('poster_videos')->nullable();
            $table->integer('users_id')->unsigned();

            $table->foreign('users_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('videos');
    }
};
