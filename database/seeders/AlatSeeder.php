<?php

namespace Database\Seeders;

use App\Models\Alat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
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
                'nama'=>'Kunci Ring-Pass 8',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 9',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 10',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 11',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 12',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 13',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 14',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 15',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 16',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 17',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 19',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 22',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Ring-Pass 24',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci L mm 1 set',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Kunci Shock 10 mm',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Obeng Plus',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Obeng Minus',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ],
            [
                'nama'=>'Tang Kombinasi',
                'pengecekan'=>'Pastikan Kunci Ada Ditempatnya dan tidak rusak',
                'standar_waktu'=>2,
                'posisi_tool'=>'Lemari Filler UHT Baris 3'
            ]
        ];

        foreach ($alatData as $key=> $val)
        {
            Alat::create($val);
        }
    }
}
