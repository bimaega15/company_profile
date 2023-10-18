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
        Schema::create('banner_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_bannerslider');
            $table->string('singkat_bannerslider');
            $table->string('deskripsi_bannerslider');
            $table->string('file_bannerslider');
            $table->enum('jenis_bannerslider', ['gambar', 'video']);
            $table->boolean('aktif_bannerslider')->default(false);
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
        Schema::dropIfExists('banner_slider');
    }
};
