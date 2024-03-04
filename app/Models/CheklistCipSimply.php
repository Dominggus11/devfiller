<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheklistCipSimply extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        
        for ($i = 1; $i <= 15; $i++) {
            $this->fillable[] = 'section1' . $i;
            $this->fillable[] = 'komponen1' . $i;
            $this->fillable[] = 'pelaksanaan1' . $i;
            $this->fillable[] = 'status_mesin1' . $i;
            $this->fillable[] = 'standar_waktu1' . $i;
            $this->fillable[] = 'waktu1' . $i;
        }

        for ($i = 1; $i <= 12; $i++) {
            $this->fillable[] = 'section2' . $i;
            $this->fillable[] = 'komponen2' . $i;
            $this->fillable[] = 'pelaksanaan2' . $i;
            $this->fillable[] = 'status_mesin2' . $i;
            $this->fillable[] = 'standar_waktu2' . $i;
            $this->fillable[] = 'waktu2' . $i;
        }
        // Kolom lainnya
        $this->fillable[] = 'shift';
        $this->fillable[] = 'tanggal';
        $this->fillable[] = 'status';
        $this->fillable[] = 'user_id';
        $this->fillable[] = 'operator';
        $this->fillable[] = 'line';
        $this->fillable[] = 'supervisor';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
