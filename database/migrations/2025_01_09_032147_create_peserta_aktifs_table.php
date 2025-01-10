<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peserta_aktifs', function (Blueprint $table) {
            $table->id();
            $table->string('id_presensi');
            $table->integer('id_card');
            $table->string('status_kekatifan');
            $table->string('status_kepesertaan');
            $table->string('nama');
            $table->string('jk');
            $table->string('notelp');
            $table->string('asal_instansi');
            $table->string('tingkat_pendididkan');
            $table->string('nis_nim');
            $table->string('kompetensi_programstudi');
            $table->string('bulan_mulai');
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->string('bulan_akhir');
            $table->string('gedung_penempatan');
            $table->string('pembimbing_perusahaan');
            $table->string('unit_penempatan');
            $table->string('jenis_pekerjaan');
            $table->string('reguler_msib_magenta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_aktifs');
    }
};
