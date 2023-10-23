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
        Schema::create('kirim_pesan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->string('nama_kirimpesan');
            $table->string('email_kirimpesan');
            $table->string('nohandphone_kirimpesan');
            $table->string('subject_kirimpesan');
            $table->string('pesan_kirimpesan');
            $table->boolean('accepts_kirimpesan')->default(false);
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
        Schema::dropIfExists('kirim_pesan');
    }
};
