<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id_pelanggan');
            $table->string('nama');
            $table->String('jabatan');
            $table->String('perwakilan');
            $table->text('alamat');
            $table->string('email');
            $table->string('lokasi');
            $table->string('hp');
            $table->string('telp');
            $table->string('fax');
            $table->string('tahun');
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
        Schema::dropIfExists('pelanggan');
    }
}
