<?php

namespace Database\Seeders;

use App\Models\Distribusi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistribusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //distribusi
        $distribusi = [
            [
                'tgldistribusi' => date('Y-m-d H:i:s'),
                'kecamatan_id' => 1,
                'desa_id' => 1,
                'jumlah_telur' => 150,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tgldistribusi' => date('Y-m-d H:i:s'),
                'kecamatan_id' => 1,
                'desa_id' => 2,
                'jumlah_telur' => 200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ];

        // Insert Seeds Instansi
        Distribusi::insert($distribusi);
    }
}
