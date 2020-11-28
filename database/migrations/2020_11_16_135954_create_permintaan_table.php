<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_peminta');
            $table->unsignedBigInteger('id_bantuan');
            $table->foreign('id_peminta')->references('id')->on('users');
            $table->foreign('id_bantuan')->references('id')->on('bantuan');
            $table->boolean('status')->nullable();
            $table->string('pesan');
            $table->string('keterangan')->default('Sedang diproses.');
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
        Schema::dropIfExists('permintaan');
    }
}
