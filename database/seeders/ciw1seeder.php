<?php

namespace Database\Seeders;

use App\Models\SectionCiw1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ciw1seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionData = [
            [
                'nama'=>'H2O2 SYSTEM',
                'standar_waktu'=> 40,
                'komponen'=>'H2O2 Exhaust Box',
                'pelaksanaan'=>'Lepas exhaust box, clening dengan amplas halus, keringkan dan pasang kembali',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/1.jpg' 
            ],
            [
                'nama'=>'H2O2 SYSTEM',
                'standar_waktu'=> 60,
                'komponen'=>'H2O2 Evaporation Unit',
                'pelaksanaan'=>'Lepas evaporation unit, rendam dengan AC3/Hot Acid selama 30 menit,bilas air keluarkan spring-difusing, gosok dengan sikat kuning panjang.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/2.jpg'
            ],
            [
                'nama'=>'H2O2 SYSTEM',
                'standar_waktu'=> 20,
                'komponen'=>'PT 100 Evaporation Unit',
                'pelaksanaan'=>'Gosok ujung PT 100 dengan amplas halus.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/3.jpg'
            ],
            [
                'nama'=>'BOTTOM SEALING',
                'standar_waktu'=> 40,
                'komponen'=>'Bottom Heater',
                'pelaksanaan'=>'Lepas nozzle bottom heater,bersihkan dengan air+VF9,scoring pad, bilas, keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/4.jpg'
            ],
            [
                'nama'=>'MANDREL UNIT',
                'standar_waktu'=> 5,
                'komponen'=>'Kaca Outlet Cooling Mandrel',
                'pelaksanaan'=>'Lap kaca dengan majun kering dan cek  kebocoran',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/5.jpg'
            ],
            [
                'nama'=>'HOOD EXHAUST',
                'standar_waktu'=> 5,
                'komponen'=>'Exhaust Top Prefolder',
                'pelaksanaan'=>'Bersihkan bagian dalam dan luar Hood Exhaust',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/6.jpg'
            ],
            [
                'nama'=>'HOOD EXHAUST',
                'standar_waktu'=> 5,
                'komponen'=>'Exhaust Top Forming',
                'pelaksanaan'=>'Bersihkan bagian dalam dan luar Hood Exhaust',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/7.jpg'
            ],
            [
                'nama'=>'DEDUSTING',
                'standar_waktu'=> 10,
                'komponen'=>'Dedusting Hood',
                'pelaksanaan'=>'Lepas dedusting unit, lalu di bersihkan dan pasang kembali.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/8.jpg'
            ],
            [
                'nama'=>'TOP PREFOLDING',
                'standar_waktu'=> 10,
                'komponen'=>'Hold Down Device',
                'pelaksanaan'=>'Lepas hold down device lalu di bersihkan dan pasang kembali.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/9.jpg'
            ],
            [
                'nama'=>'POCKET CHAIN',
                'standar_waktu'=> 10,
                'komponen'=>'Nozzle Spray Pocket Chain',
                'pelaksanaan'=>'Lepas nozzle spray lalu bersihkan dan pasang kembali',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/10.jpg'
            ],
            [
                'nama'=>'OUTFEED AREA',
                'standar_waktu'=> 40,
                'komponen'=>'Transporting Conveyor',
                'pelaksanaan'=>'Bersihkan bagian atas dan bawah conveyor, serta area outfeed',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/11.jpg'
            ],
            [
                'nama'=>'WATER FILTER',
                'standar_waktu'=> 15,
                'komponen'=>'Water filter',
                'pelaksanaan'=>'Lepas water filter, rendam dengan air dan VF9, sikat, gosok dengan scoring pad,bilas dan pasang kembali.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/12.jpg'
            ],
            [
                'nama'=>'STERILE AIR SYSTEM',
                'standar_waktu'=> 25,
                'komponen'=>'Prefilter',
                'pelaksanaan'=>'Lepas prefilter, cleaning area prefilter dan semprot dengan air gun kemudian pasang kembali.',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/13.jpg'
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCiw1::create($val);
        }
    }
}
