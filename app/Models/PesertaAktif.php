<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaAktif extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_presensi',
        'id_card',
        'status_keaktifan',
        'status_kepesertaan',
        'nama',
        'jk',
        'notelp',
        'asal_instansi',
        'tingkat_pendidikan',
        'nis_nim',
        'kompetensi_programstudi',
        'bulan_mulai',
        'periode_awal',
        'periode_akhir',
        'bulan_berakhir',
        'gedung_penempatan',
        'pembimbing_perusahaan',
        'unit_penempatan',
        'jenis_pekerjaan',
        'reguler_msib_magenta',
    ];
}
