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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_clients');
            $table->string('perusahaan_clients')->nullable();
            $table->text('alamat_clients')->nullable();
            $table->text('nohandphone_clients', 30)->nullable();
            $table->string('email_clients', 200)->nullable();
            $table->text('deskripsi_clients')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('gambar_clients')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
