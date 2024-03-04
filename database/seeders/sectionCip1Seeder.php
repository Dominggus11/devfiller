<?php

namespace Database\Seeders;

use App\Models\SectionCip;
use App\Models\SectionCip1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sectionCip1Seeder extends Seeder
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
                'nama'=>'TOP SEALING',
                'standar_waktu'=> 5,
                'komponen'=>'STEAM INJECTION NOZZLE',
                'pelaksanaan'=>'Rendam air + VF9, gosok dengan scoring pad,bilas bersih dengan air,keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'ON',
                'gambar'=>'/Image/cip-simply/1. Seaction_ Top Sealing , Komponen _ Steam Injection Nozzle .jpeg' ,
            ],
            [
                'nama'=>'TOP SEALING',
                'standar_waktu'=> 5,
                'komponen'=>'ANVIL',
                'pelaksanaan'=>'Rendam air + VF9, gosok dengan scoring pad,bilas bersih dengan air,keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'ON',
                'gambar'=>'/Image/cip-simply/2. Seaction_ Top Sealing , Komponen _ Anvil jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 5,
                'komponen'=>'SEPARATING PLATE DAN SMALL DISTRIBUTOR',
                'pelaksanaan'=>'Rendam air + VF9, gosok dengan scoring pad,bilas bersih dengan air,keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'ON',
                'gambar'=>'/Image/cip-simply/3.  Seaction_ Aseptic Zone , Komponen _Separating plate  .jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 5,
                'komponen'=>'SEPARATING PLATE DAN SMALL DISTRIBUTOR',
                'pelaksanaan'=>'Rendam air + VF9, gosok dengan scoring pad,bilas bersih dengan air,keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'ON',
                'gambar'=>'/Image/cip-simply/4.  Seaction_ Aseptic Zone , Komponen _Separating plate  .jpeg'
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 5,
                'komponen'=>'H2O2 TUNEL, SEPARATING PLATE DAN LAMINAR',
                'pelaksanaan'=>'Rendam air + VF9, gosok dengan scoring pad,bilas bersih dengan air,keringkan dan lap dengan alkohol 70 %.',
                'status_mesin'=>'ON',
                'gambar'=>'/Image/cip-simply/5.  Seaction_ Aseptic Zone , Komponen _H202 Tunel .jpeg' 
            ],
            [
                'nama'=>'DRYING ZONE',
                'standar_waktu'=> 10,
                'komponen'=>'H2O2, PREHEATING, AND DRYING NOZZLE',
                'pelaksanaan'=>'Semprot water pressure gun + VF9, gosok dengan scoring pad bilas with  water, keringkan dengan angin , lap Dengan Majun yang di basahi alkohol.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/6.  Seaction_ Drying Zone , Komponen _H202 Preheating .jpeg' 
            ],
            [
                'nama'=>'FILLING ZONE',
                'standar_waktu'=> 10,
                'komponen'=>'FILLING HEAD & SWIVEL COUPLING',
                'pelaksanaan'=>'Semprot water pressure gun + VF9, gosok dengan scoring pad bilas with  water, keringkan dengan angin , lap Dengan Majun yang di basahi alkohol.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/7.  Seaction_ Filling Zone , Komponen _Filling head and swivel .jpeg' 
            ],
            [
                'nama'=>'US ZONE',
                'standar_waktu'=> 15,
                'komponen'=>'FILLING HEAD & SWIVEL COUPLING',
                'pelaksanaan'=>'Semprot water pressure gun + VF9, gosok dengan scoring pad bilas with  water, keringkan dengan angin , lap Dengan Majun yang di basahi alkohol.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/8.  Seaction_ Filling Zone , Komponen _Filing Head  .jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 5,
                'komponen'=>'DEK ATAS ASEPTIC ZONE',
                'pelaksanaan'=>'Basahi dengan air + VF9, gosok dengan scoring pad bilas bersih dengan air.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/9. Seaction_ Aseptic Zone , Komponen _Deck Atas.jpeg'
            ],
            [
                'nama'=>'TOP FORMING',
                'standar_waktu'=> 10,
                'komponen'=>'EAR PRESS',
                'pelaksanaan'=>'Semprot water pressure gun + VF9, gosok dengan scoring pad bilas with  water, keringkan dengan angin , lap Dengan Majun yang di basahi alkohol.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/10.  Seaction_ Top Forming , Komponen _Ear Press  .jpeg' 
            ],
            [
                'nama'=>'TOP FORMING',
                'standar_waktu'=> 10,
                'komponen'=>'NOZZLE TOP HEATER',
                'pelaksanaan'=>'Semprot water pressure gun + VF9, gosok dengan scoring pad bilas with  water, keringkan dengan angin , lap Dengan Majun yang di basahi alkohol.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/11.  Seaction_ Top Forming, Komponen _Nozzle Top  .jpeg'
            ],
            [
                'nama'=>'DISCHARGE TABLE',
                'standar_waktu'=> 15,
                'komponen'=>'POCKET DISCHARGE',
                'pelaksanaan'=>'semprot water pressure gun+VF9, gosok dengan scoring pad/ sikat kuning',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/12.  Seaction_ Discharge Table , Komponen _Pocket Discharge .jpeg'
            ],
            [
                'nama'=>'DISCHARGE TABLE',
                'standar_waktu'=> 10,
                'komponen'=>'OUTFEED CONVEYOR ATAS DAN BAWAH',
                'pelaksanaan'=>'semprot water pressure gun+VF9, gosok dengan scoring pad/ sikat kuning',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/13.  Seaction_Discharge Table , Komponen _Outfeed Conveyor Atas Bawah .jpeg' 
            ],
            [
                'nama'=>'MESIN KODE',
                'standar_waktu'=> 7,
                'komponen'=>'COVER LASER',
                'pelaksanaan'=>'Lap dengan majun bersih yang di basahi alokohol 70%',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/14.  Seaction_ Mesin Kode , Komponen _Cover Laser .jpeg'
            ],
            [
                'nama'=>'ALL TRAY',
                'standar_waktu'=> 10,
                'komponen'=>'MANDREL DAN OUTFEED CONVEYOR',
                'pelaksanaan'=>'Basahi dengan air + VF9, gosok dengan scoring pad bilas bersih dengan air.',
                'status_mesin'=>'ON/OFF',
                'gambar'=>'/Image/cip-simply/15.  Seaction_ All Tray, Komponen _Mandreel Dan Outfeet  .jpeg'
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCip1::create($val);
        }
    }
}
