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
        Schema::create('visit_browsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_visitbrowsers');
            $table->string('device_visitbrowsers');
            $table->string('browser_visitbrowsers');
            $table->dateTime('tanggal_visitbrowsers');
            $table->boolean('is_desktop')->nullable();
            $table->boolean('is_tablet')->nullable();
            $table->boolean('is_phone')->nullable();
            $table->integer('postingan_visitbrowsers')->nullable();
            $table->integer('berita_visitbrowsers')->nullable();
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
        Schema::dropIfExists('visit_browsers');
    }
};
