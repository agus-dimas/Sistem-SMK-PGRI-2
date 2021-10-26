<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nis';

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas',
        'tgl_lahir',
        'jenis_kelamin',
        'alamat',
        'nama_wali',
        'telp_wali',
    ];
}