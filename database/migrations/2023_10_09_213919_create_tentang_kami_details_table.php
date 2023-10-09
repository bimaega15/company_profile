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
        Schema::create('tentang_kami_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar_tentangdetail')->nullable();
            $table->string('judul_tentangdetail');
            $table->string('pesan_tentangdetail');
            $table->string('nama_tentangdetail');
            $table->string('posisi_tentangdetail');
            $table->integer('tentang_kami_id')->unsigned();
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('tentang_kami_id')->references('id')->on('tentang_kami')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tentang_kami_detail');
    }
};
