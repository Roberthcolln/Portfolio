<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriEducation extends Model
{
    use HasFactory;
    protected $table = 'kategori_education';
    protected $primaryKey = 'id_kategori_education';
    protected $fillable = [
        'nama_kategori_education',

    ];
}
