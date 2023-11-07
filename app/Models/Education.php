<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education';
    protected $primaryKey = 'id_education';
    protected $fillable = [
        'id_kategori_education',
        'nama_education',
        'keterangan_education',
        'tanggal_masuk_education',
        'tanggal_keluar_education',
        'slug_education',
    ];
}
