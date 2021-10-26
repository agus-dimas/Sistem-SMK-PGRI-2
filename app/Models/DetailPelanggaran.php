<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPelanggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nis',
        'nama_siswa',
        'kelas',
        'tahun_ajaran',
        'semester',
        'kode_pelanggaran',
        'nama_pelanggaran',
        'poin',
    ];
}