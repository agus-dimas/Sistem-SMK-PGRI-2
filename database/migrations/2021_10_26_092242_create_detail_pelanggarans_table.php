<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPelanggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pelanggaran', function (Blueprint $table) {
            $table->date('tanggal');
            $table->integer('nis')->index();
            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('tahun_ajaran');
            $table->string('semester');
            $table->string('kode_pelanggaran')->index();
            $table->foreign('kode_pelanggaran')->references('kode_pelanggaran')->on('jenis_pelanggaran')->onDelete('cascade');
            $table->string('nama_pelanggaran');
            $table->integer('poin');
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
        Schema::dropIfExists('detail_pelanggaran');
    }
}