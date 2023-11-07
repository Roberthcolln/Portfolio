<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'partner';
    protected $primaryKey = 'id_partner';
    protected $fillable = [
        'id_kategori_partner',
        'nama_partner',
        'url_partner',
        'gambar_partner',
        
    ];
}
