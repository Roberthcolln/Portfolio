<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPartner extends Model
{
    use HasFactory;
    protected $table = 'kategori_partners';
    protected $primaryKey = 'id_kategori_partner';
    protected $fillable = [
        'nama_kategori_partner',

    ];
}
