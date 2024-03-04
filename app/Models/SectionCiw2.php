<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionCiw2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'komponen',
        'gambar',
        'status_mesin',
        'pelaksanaan',
        'standar_waktu'
    ];
}
