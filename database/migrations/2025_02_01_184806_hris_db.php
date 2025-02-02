<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Pastikan Anda menggunakan koneksi hris_db
     *
     * @return void
     */
  public function up()
    {
        Schema::connection('hris_db')->create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_induk_pegawai')->unique(); 
            $table->string('nama');
            $table->string('jabatan');
            $table->text('keterangan')->nullable();
            $table->string('bidang')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('hris_db')->dropIfExists('employees');
    }
};