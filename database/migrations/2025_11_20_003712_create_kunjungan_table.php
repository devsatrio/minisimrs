<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganTable extends Migration
{
    public $timestamps = false;
    public function up()
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasikunjungan')->unique();
            $table->string('no_rm');
            $table->date('tanggal_kunjungan');
            $table->string('kode_dokter');
            $table->string('poli');
            $table->string('instalasi');
            $table->string('penjamin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kunjungan');
    }
}
