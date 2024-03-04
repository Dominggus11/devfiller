<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheklistCiwSimply extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        for ($i = 1; $i <= 13; $i++) {
            $this->fillable[] = 'section1' . $i;
            $this->fillable[] = 'komponen1' . $i;
            $this->fillable[] = 'pelaksanaan1' . $i;
            $this->fillable[] = 'status_mesin1' . $i;
            $this->fillable[] = 'standar_waktu1' . $i;
            $this->fillable[] = 'waktu1' . $i;
        }
        
        for ($i = 1; $i <= 8; $i++) {
            $this->fillable[] = 'section2' . $i;
            $this->fillable[] = 'komponen2' . $i;
            $this->fillable[] = 'pelaksanaan2' . $i;
            $this->fillable[] = 'status_mesin2' . $i;
            $this->fillable[] = 'standar_waktu2' . $i;
            $this->fillable[] = 'waktu2' . $i;
        }

        for ($i = 1; $i <= 21; $i++) {
            $this->fillable[] = 'section3' . $i;
            $this->fillable[] = 'komponen3' . $i;
            $this->fillable[] = 'pelaksanaan3' . $i;
            $this->fillable[] = 'status_mesin3' . $i;
            $this->fillable[] = 'standar_waktu3' . $i;
            $this->fillable[] = 'waktu3' . $i;
        }

        for ($i = 1; $i <= 3; $i++) {
            $this->fillable[] = 'section4' . $i;
            $this->fillable[] = 'komponen4' . $i;
            $this->fillable[] = 'pelaksanaan4' . $i;
            $this->fillable[] = 'status_mesin4' . $i;
            $this->fillable[] = 'standar_waktu4' . $i;
            $this->fillable[] = 'waktu4' . $i;
        }

        // Kolom lainnya
        $this->fillable[] = 'shift';
        $this->fillable[] = 'tanggal';
        $this->fillable[] = 'status';
        $this->fillable[] = 'operator';
        $this->fillable[] = 'line';
        $this->fillable[] = 'supervisor';
        $this->fillable[] = 'user_id';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
