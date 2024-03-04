<?php

namespace Database\Seeders;

use App\Models\SectionCiw2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ciw2seeder extends Seeder
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
                'nama'=>'CENTRAL LUBRIKASI',
                'standar_waktu'=> 3,
                'komponen'=>'Main Distributor',
                'pelaksanaan'=>'Pastikan tidak ada kemacetan di jalur lubrikasi otomatis (pin menonjol keluar maka lubrikasi macet)',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/14.jpg'
            ],
            [
                'nama'=>'CENTRAL LUBRIKASI',
                'standar_waktu'=> 4,
                'komponen'=>'Grease Tank Automatic Lubikasi',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa hingga grease tank terisi sesuai level.Pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/15.jpg'
            ],
            [
                'nama'=>'MANDREL WHEEL',
                'standar_waktu'=> 8,
                'komponen'=>'Bearing Cam Flower',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/16.jpg'
            ],
            [
                'nama'=>'MANDREL WHEEL',
                'standar_waktu'=> 2,
                'komponen'=>'Cylinder Top Prefolder ',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/17.jpg'
            ],
            [
                'nama'=>'TOP PREFOLDER',
                'standar_waktu'=> 1,
                'komponen'=>'Shaft Top Prefolder',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/18.jpg'
            ],
            [
                'nama'=>'POCKET CHAIN',
                'standar_waktu'=> 1,
                'komponen'=>'Shaft Main Drive Pocket Chain',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/19.jpg'
            ],
            [
                'nama'=>'OFF CONVEYOR',
                'standar_waktu'=> 1,
                'komponen'=>'Sproket Outfeed Conveyor',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/20.jpg'
            ],
            [
                'nama'=>'Discharge Station',
                'standar_waktu'=> 1,
                'komponen'=>'Sproket Outfeed Conveyor Discharge ',
                'pelaksanaan'=>'Pasang grease gun ke nipple lubrikasi, pompa 2x dan bersihkan grease yang tersisa di nipple, cek dan pastikan bearing terlubrikasi',
                'status_mesin'=>'OFF',
                'gambar'=>'/image/ciw-simply/21.jpg'
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCiw2::create($val);
        }
    }
}
