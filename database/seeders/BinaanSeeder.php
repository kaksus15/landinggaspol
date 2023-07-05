<?php

namespace Database\Seeders;

use App\Models\Binaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BinaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //binaan
        $binaan = [
            [
                'instansi_id' => 24,
                'kecamatan_id' => 2,
                'desa_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi_id' => 24,
                'kecamatan_id' => 2,
                'desa_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi_id' => 24,
                'kecamatan_id' => 2,
                'desa_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'instansi_id' => 24,
                'kecamatan_id' => 4,
                'desa_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ];

        // Insert Seeds Instansi
        Binaan::insert($binaan);
    }
}
