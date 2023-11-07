<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'work';
    protected $primaryKey = 'id_work';
    protected $fillable = [
        
        'nama_work',
        'keterangan_work',
        'tanggal_masuk_work',
        'tanggal_keluar_work',
        'slug_work',
    ];
}
