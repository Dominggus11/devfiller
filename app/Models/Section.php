<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'standar_waktu',
        'status_mesin',
        'komponen',
        'pelaksanaan'
    ];
}
