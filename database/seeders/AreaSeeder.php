<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alatData = [
            [
                'nama'=>'Suction Cup',
                'pengecekan'=>'Cek kondisi suction cup dalam keadan baik,tidak sobek',
                'status_mesin'=>'ON/OFF',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/Inspeksi no 1. suction cup.jpeg' ,
            ],
            [
                'nama'=>'Nipple Inlet Cooling Mandrel',
                'pengecekan'=>'Pastikan tidak ada kebocoran pada Nipple.',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 2. niple inlet .jpeg',
            ],
            [
                'nama'=>'Filling Station',
                'pengecekan'=>'Pastikan Filling Head tidak Bocor',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/Inspeksi no 3. filing station.jpeg',
            ],
            [
                'nama'=>'Air Cylinder Filling Station',
                'pengecekan'=>'Pastikan tidak ada kebocoran pada air cylinder filling station',
                'status_mesin'=>'OFF',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 4. air cylinder.jpeg',
            ],
            [
                'nama'=>'Interlock',
                'pengecekan'=>'Pastikan interlock tidak dijumper',
                'status_mesin'=>'OFF',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 5. interlock.jpeg',
            ],
            [
                'nama'=>'Water Spraying Lubrication track 1 dan track 6',
                'pengecekan'=>'Pastikan chain terlubrikasi dan nozzle spraying tidak tersumbat',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 6. water spraying .jpeg',
            ],
            [
                'nama'=>'Pressure Regulator Compressed Air',
                'pengecekan'=>'Cek apakah jarum Regulator sudah menunjukkan angka yang sesuai',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 7. pressure regulator  .jpeg',
            ],
            [
                'nama'=>'Selang silicon dan rotor H202  Dosing Pump',
                'pengecekan'=>'Pastikan  selang dosing tidak bocor dan rotor bekerja dengan baik tidak oblak',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 8.Selang silicon dan rotor .jpeg' 
            ],
            [
                'nama'=>'Pressure Regulator H2O2',
                'pengecekan'=>'Pastikan tekanan supplay angin sesuai dngan standardnya  5500 mbar - 8000 mbar',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 9.Presure regulator.jpeg'
            ],
            [
                'nama'=>'Water Regulator Lubrikasi ',
                'pengecekan'=>'Pastikan level pada posisi standar  (2 - 6 mbar )',
                'status_mesin'=>'ON',
                'standar_waktu'=>0.5,
                'gambar'=>'/Image/as-simply/inspeksi no 10. Water regulator.jpeg' 
            ]
        ];
        foreach ($alatData as $key=> $val)
        {
            Area::create($val);
        }
    }
}
