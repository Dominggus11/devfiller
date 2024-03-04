<?php

namespace Database\Seeders;

use App\Models\SectionCiw3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ciw3seeder extends Seeder
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
                'nama'=>'SAFETY',
                'komponen'=>'LOTOTO',
                'pelaksanaan'=>'Pastikan kartu LOTOTO terpasang saat melakukan kegiatan CIL Weekly',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/22.jpg'
            ],

            [
                'nama'=>'SAFETY',
                'komponen'=>'Emergency Stop',
                'pelaksanaan'=>'Pastikan tombol emergency stop berfungsi (5 titik)',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/23.jpg'
            ],


            [
                'nama'=>'MAGAZINE',
                'komponen'=>'Sling Magazine',
                'pelaksanaan'=>'Pastikan sling magazine tidak berserabut',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/24.jpg'
            ],

            [
                'nama'=>'MAGAZINE',
                'komponen'=>'Spring Uprihgting Flap',
                'pelaksanaan'=>'Pastikan Uprihgting Flap berfungsi saat pengisian sleeve ( bisa membalik dan tidak patah)',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/25.jpg'
            
            ],
        
            [
                'nama'=>'BOTTOM SEALING',
                'komponen'=>'Lateral Bottom Folder',
                'pelaksanaan'=>'Pastikan finger lateral bottom folder tidak tajam',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/26.jpg'
            ],

            [
                'nama'=>'BOTTOM SEALING',
                'komponen'=>'Bottom Heater',
                'pelaksanaan'=>'Pastikan posisi tidak miring, baut terpasang dengan kencang dan cek kelurusannya',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/27.jpg'
            ],

            [
                'nama'=>'BOTTOM SEALING',
                'komponen'=>'Longitudinal Bottom Folder',
                'pelaksanaan'=>'Pastikan ujung permukaan longitudinal bottom folder tidak tajam dan tidak rusak',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/28.jpg'
            ],

            [
                'nama'=>'SWIVEL COUPLING',
                'komponen'=>'Cylinder Swivel Coupling Up Down Sisi',
                'pelaksanaan'=>'Check kekencangan antara baut dan cylinder dengan 2 kunci 16',
                'status_mesin'=>'OFF',
                'standar_waktu'=>2 ,
                'gambar'=>'/image/ciw-simply/29.jpg'
            ],

            [
                'nama'=>'SWIVEL COUPLING',
                'komponen'=>'Rotary Cylinder Sisi Track 1 & 6',
                'pelaksanaan'=>'Check kekencangan 2 buah baut rotari cylinder swivel coupling',
                'status_mesin'=>'OFF',
                'standar_waktu'=>2 ,
                'gambar'=>'/image/ciw-simply/30.jpg'
            ],

            [
                'nama'=>'H202 EVAPORATI ON UNIT',
                'komponen'=>'Clamp Evaporasi Unit',
                'pelaksanaan'=>'Pastikan posisi Clamp tepat dan pastikan clamp evaporasi H202 tidak bocor saat Sterilisasi',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/31.jpg'
            ],

            [
                'nama'=>'H202 EVAPORATI ON UNIT',
                'komponen'=>'PT 100 Evaporasi Unit',
                'pelaksanaan'=>'Pastikan ujung PT 100 kurang 5mm dari tengah diameter dudukan evaporasi',
                'status_mesin'=>'OFF',
                'standar_waktu'=>2 ,
                'gambar'=>'/image/ciw-simply/32.jpg'
            ],

            [
                'nama'=>'COOLING MANDREL',
                'komponen'=>'Level Cooling Tank',
                'pelaksanaan'=>'Pastikan level cooling sesuai batas maximal',
                'status_mesin'=>'ON/OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/33.jpg'
            ],

            [
                'nama'=>'TOP PREFOLDER',
                'komponen'=>'Dedusting',
                'pelaksanaan'=>'Pastikan baut deduisting terpasang dengan benar & kencang, posisi pengait tepaat pada posisinya',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/34.jpg'
            ],

            [
                'nama'=>'TOP PREFOLDER',
                'komponen'=>'Hold-Down Device',
                'pelaksanaan'=>'Pastikan baut hold down device terpasang dengan benar & kencang sesuai dengan posisinya',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/35.jpg'
            ],

            [
                'nama'=>'TOP PREFOLDER',
                'komponen'=>'Air Cylinder Top Prefolder',
                'pelaksanaan'=>'Pastikan tidak ada kebocoran angin di air cylinder & selang air cylinder, pastikan posisi sensor tepat & kencang , pastikan titik lubrikasi terlumasi grease',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/36.jpg'
            ],

            [
                'nama'=>'FEEDER',
                'komponen'=>'Thootbelt Feeder',
                'pelaksanaan'=>'Thootbelt tidak retak grepes, tidak bengkok',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/37.jpg'
            ],

            [
                'nama'=>'FILLING STATION',
                'komponen'=>'Diapragm Filling Station All Track',
                'pelaksanaan'=>'Pastikan saat cip (connecting pipa tangki produk, valve reduction, fow meter, diaphram tidak ada kebocoran',
                'status_mesin'=>'CIP',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/38.jpg'
            ],

            [
                'nama'=>'STERILE AIR SYSTEM',
                'komponen'=>'Hose Sterile Air',
                'pelaksanaan'=>'Cek kondisi hose sterile air area atas filling chmaber',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/39.jpg'
            ],

            [
                'nama'=>'TOP SEALING',
                'komponen'=>'Selang Angin Sonotrode',
                'pelaksanaan'=>'Cek selang angin sonotrode, pastikan tidak ada yang bocor',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/40.jpg'
            ],


            [
                'nama'=>'DISCHARGE STATION',
                'komponen'=>'Sensor Over Load Device Monitoring',
                'pelaksanaan'=>'Pastikan sensor overload monitoring berfungsi normal',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/41.jpg'
            ],

            [
                'nama'=>'DECK ATAS',
                'komponen'=>'Clamp Zero Sampling',
                'pelaksanaan'=>'Pastikan Clamp tidak kendur',
                'status_mesin'=>'OFF',
                'standar_waktu'=>1 ,
                'gambar'=>'/image/ciw-simply/42.jpg'
            ]

        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCiw3::create($val);
        }
    }
}
