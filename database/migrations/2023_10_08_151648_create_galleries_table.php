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
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_gallery', 200)->nullable();
            $table->text('keterangan_gallery')->nullable();
            $table->dateTime('waktu_gallery')->nullable();
            $table->string('gambar_gallery')->nullable();
            $table->integer('users_id')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery');
    }
};
