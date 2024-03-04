<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
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
                'nama'=>'MAGAZINE AREA',
                'standar_waktu'=> 2,
                'komponen'=>'LOADING SLEEVE',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'ON'
            ],
            [
                'nama'=>'SLEEVE INFEED',
                'standar_waktu'=> 2,
                'komponen'=>'HANDLE SUCTION CUP',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'SLEEVE INFEED',
                'standar_waktu'=> 2,
                'komponen'=>'SUCTION CUP',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'SLEEVE INFEED',
                'standar_waktu'=> 2,
                'komponen'=>'OPENING CUP',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'SLEEVE INFEED',
                'standar_waktu'=> 2,
                'komponen'=>'SLEEVE PUSHER',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'DEDUSTING',
                'standar_waktu'=> 1,
                'komponen'=>'DEDUSTING',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'MANDREL AREA',
                'standar_waktu'=> 3,
                'komponen'=>'MANDREL UNIT',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'MANDREL AREA',
                'standar_waktu'=> 3,
                'komponen'=>'TRANSFER STATION',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'BOTTOM SEALING',
                'standar_waktu'=> 3,
                'komponen'=>'BOTTOM PRESS',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'BOTTOM SEALING',
                'standar_waktu'=> 3,
                'komponen'=>'LONGITUDINAL BOTTOM FOLDER',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'BOTTOM SEALING ',
                'standar_waktu'=> 3,
                'komponen'=>'LATERAL BOTTOM FOLDER',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ],
            [
                'nama'=>'TOP PREFOLDING ',
                'standar_waktu'=> 1,
                'komponen'=>'TOP PREFOLDING',
                'pelaksanaan'=>'Lap dengan kertas duppon yang di basahi alokohol 70%',
                'status_mesin'=>'OFF'
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            Section::create($val);
        }
    }
}
