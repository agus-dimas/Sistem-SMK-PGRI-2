<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPelanggaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_pelanggaran';

    protected $fillable = [
        'kode_pelanggaran',
        'nama_pelanggaran',
        'poin',
        'kategori',
    ];
}