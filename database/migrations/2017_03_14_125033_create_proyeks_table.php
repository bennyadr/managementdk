<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->increments('id_proyek');
            $table->integer('id_pelanggan')->unsigned();
            $table->string('nama_proyek');
            $table->string('spk');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('nilai_proyek');
            $table->string('tahun');
            $table->string('status_proyek');
            $table->boolean('status_pembayaran');
            $table->text('keterangan');
            $table->integer('id_grup')->unsigned();
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
