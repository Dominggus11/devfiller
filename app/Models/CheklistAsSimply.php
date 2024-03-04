<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheklistAsSimply extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        for ($i = 1; $i <= 18; $i++) {
            $this->fillable[] = 'alat' . $i;
            $this->fillable[] = 'posisi_tool' . $i;
            $this->fillable[] = 'pengecekan1' . $i;
            $this->fillable[] = 'standar_waktu1' . $i;
            $this->fillable[] = 'waktu1' . $i;
        }

        for ($i = 1; $i <= 12; $i++) {
            $this->fillable[] = 'section' . $i;
            $this->fillable[] = 'komponen' . $i;
            $this->fillable[] = 'pelaksanaan' . $i;
            $this->fillable[] = 'status_mesin1' . $i;
            $this->fillable[] = 'standar_waktu2' . $i;
            $this->fillable[] = 'waktu2' . $i;
        }

        for ($i = 1; $i <= 10; $i++) {
            $this->fillable[] = 'area' . $i;
            $this->fillable[] = 'foto' . $i;
            $this->fillable[] = 'pengecekan2' . $i;
            $this->fillable[] = 'status_mesin2' . $i;
            $this->fillable[] = 'simbul' . $i;
            $this->fillable[] = 'standar_waktu3' . $i;
            $this->fillable[] = 'waktu3' . $i;
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
