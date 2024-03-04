<?php

namespace Database\Seeders;

use App\Models\SectionCip2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionCip2Seeder extends Seeder
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
                'nama'=>'Mandrel Wheele',
                'standar_waktu'=> 0.5,
                'komponen'=>'Sensor Tranfer Station',
                'pelaksanaan'=>'Pastikan Sensor menyala dan bebas dari debu',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/11. Seaction_ Mandrel Wheele , Komponen _ Sensor Tranfer Station.jpeg' 
            ],
            [
                'nama'=>'Top Prefolder',
                'standar_waktu'=> 0.5,
                'komponen'=>'Plate gate sensor detection ',
                'pelaksanaan'=>'Pastikan Sensor menyala dan bersih dari debu',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/12. Seaction_ Top Prefolder , Komponen _ Plate gate sensor detection.jpeg'
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 0.5,
                'komponen'=>'Shaft swivel coupling',
                'pelaksanaan'=>'Pastikan saat CIP Bushing shaft swivel coupling tidak ada kebocoran',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/13. Seaction_ Aseptic Zone , Komponen _ Shaft Swivel Coupling .jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 0.5,
                'komponen'=>'Gasket Swivel Coupling',
                'pelaksanaan'=>'Pastikan saat CIP swivel couplin tidak bocor, jika bocor ganti Oring swivel coupling',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/14. Seaction_ Aseptic Zone , Komponen _ Gasket Swivel Coupling .jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 0.5,
                'komponen'=>'Pengait (Hook Guide Clamp)',
                'pelaksanaan'=>'Pengait bawah masuk ke Pengait atas',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/15. Seaction_ Aseptic Zone , Komponen _ Pengait (Hook Guide Clamp) .jpeg' 
            ],
            [
                'nama'=>'ASEPTIC ZONE',
                'standar_waktu'=> 0.5,
                'komponen'=>'Sensor Aseptic Chamber',
                'pelaksanaan'=>'Ketika kaca window aseptik terpasang sensor harus menyala.',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/16. Seaction_ Aseptic Zone , Komponen _ Sensor Aseptic Chamber.jpeg' 
            ],
            [
                'nama'=>'HMI',
                'standar_waktu'=> 0.5,
                'komponen'=>'Layar HMI',
                'pelaksanaan'=>'Pastikan Jenis product & Size yang akan diproduksi sesuai denag yang tertera DI HMI',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/17. Seaction_ HMI , Komponen _ Layar Hmi .jpeg'
            ],
            [
                'nama'=>'Discharge Table',
                'standar_waktu'=> 0.5,
                'komponen'=>'Sensor Discharge Unit Contour Detection',
                'pelaksanaan'=>'Pastikan sensor discharge contour detection selalu menyala',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/18. Seaction_ Discharge Table , Komponen _ Sensor Discharge Unit Contour .jpeg'
            ],
            [
                'nama'=>'Discharge Table',
                'standar_waktu'=> 0.5,
                'komponen'=>'Plate Pocket Discharge',
                'pelaksanaan'=>'Pastikan Plate pocket discharge tidak bengkok, Gunakan JIG untuk setting Plate',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/19. Seaction_ Discharge Table , Komponen _ Plate Pocket Discharge.jpeg' 
            ],
            [
                'nama'=>'Discharge Table',
                'standar_waktu'=> 0.5,
                'komponen'=>'Guide Discharge',
                'pelaksanaan'=>'Pastikan Guide Sesuai Marking',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/20. Seaction_ Discharge Table , Komponen _ Guide Discharge .jpeg' 
            ],
            [
                'nama'=>'Discharge Table',
                'standar_waktu'=> 0.5,
                'komponen'=>'Thootbelt conveyor',
                'pelaksanaan'=>'Pastikan round belt tidak aus dan tidak lepas dari rel',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/21. Seaction_ Discharge Table , Komponen _ Thootbelt Conveyor .jpeg' 
            ],
            [
                'nama'=>'Outfeed',
                'standar_waktu'=> 0.5,
                'komponen'=>'Conveyor Outfeed',
                'pelaksanaan'=>'Pastikan Conveyor tidak ada yang pecah atau gompal dan gerakanya halus',
                'status_mesin'=>'OFF',
                'gambar'=>'/Image/cip-simply/22.  Seaction_ Outfeed , Komponen _ Conveyor Outfeed  .jpeg' 
            ]
        ];

        foreach ($sectionData as $key=> $val)
        {
            SectionCip2::create($val);
        }
    }
}
