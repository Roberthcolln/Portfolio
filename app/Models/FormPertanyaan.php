<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPertanyaan extends Model
{
    use HasFactory;
    protected $table = 'form_pertanyaan';
    protected $primaryKey = 'id_form_pertanyaan';
    public $timestamps = true;
    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan'
    ];
}
