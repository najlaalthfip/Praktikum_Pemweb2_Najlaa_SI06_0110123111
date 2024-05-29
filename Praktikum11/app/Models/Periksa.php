<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'periksas';

    // Kolom apa yang bisa diisi
    protected $fillable = [
        'kode',
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'dokter_id',
    ];
}
