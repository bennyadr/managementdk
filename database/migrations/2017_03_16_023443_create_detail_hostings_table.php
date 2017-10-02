<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_hosting', function (Blueprint $table) {
            $table->increments('id_detail_hosting');
            $table->integer('id_pelanggan_hosting')->unsigned();
            $table->date('awal_daftar');
            $table->date('tgl_selesai');
            $table->string('inputed_by');
            $table->timestamps();

            $table->foreign('id_pelanggan_hosting')->references('id_pelanggan_hosting') ->on('pelanggan_hosting')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_hosting');
    }
}
