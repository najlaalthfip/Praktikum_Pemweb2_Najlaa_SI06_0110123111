<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'dokters';

    // Kolom apa yang bisa diisi
    protected $fillable = [
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telpon',
        'alamat',
        'unitkerja_id',
    ];      
}
