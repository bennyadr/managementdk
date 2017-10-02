<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan_hosting', function (Blueprint $table) {
            $table->increments('id_pelanggan_hosting');
            $table->string('nama');
            $table->text('alamat');
            $table->string('hp');
            $table->string('email');
            $table->string('telp');
            $table->string('fax');
            $table->string('domain');
            $table->string('perwakilan');
            $table->string('jabatan');
            $table->string('tahun');
            $table->boolean('status_hosting');
            $table->integer('id_paket');

            $table->string('inputed_by');
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
        Schema::dropIfExists('pelanggan_hosting');
    }
}
