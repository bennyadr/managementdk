<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_proyek', function (Blueprint $table) {
            $table->increments('id_detail_proyek');
            $table->integer('id_proyek')->unsigned();
            $table->integer('id_vendor')->unsigned();
            $table->string('deskripsi');
            $table->date('tgl');
            $table->integer('nilai');
            $table->text('keterangan');
            $table->timestamps();

            $table -> foreign('id_proyek')->references('id_proyek')->on('proyek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_proyek');
    }
}
