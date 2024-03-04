<?php

namespace Database\Seeders;

use App\Models\SectionCiw4;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ciw4seeder extends Seeder
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
                'nama'=>'OUTFEED CONVEYOR',
                'komponen'=>'Nozzle Dry Lube',
                'pelaksanaan'=>'Pastikan nipple tidak macet dan bocor',
                'status_mesin'=>'ON/OFF',
                'standar_waktu'=> 1,
                'gambar'=>'/image/ciw-simply/43.jpg'
            ],
            [
                'nama'=>'END CLUSTER',
                'komponen'=>'Valve V121, V123, V125',
                'pelaksanaan'=>'Pastikan tidak ada kebocoran product di V121, V123, V125 dan pastikan selang angin terpasang sesuai marking.',
                'status_mesin'=>'ON',
                'standar_waktu'=> 2,
                'gambar'=>'/image/ciw-simply/44.jpg'
            ],
            [
                'nama'=>'FILLING STATION',
                'komponen'=>'Sealing Plate Filling Station All Track',
                'pelaksanaan'=>'Pastikan saat CIP tidak kebocoran pada ujung nozzle filling station all track (seal plate)',
                'status_mesin'=>'ON',
                'standar_waktu'=> 1,
                'gambar'=>'/image/ciw-simply/45.jpg'
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCiw4::create($val);
        }
    }
}
