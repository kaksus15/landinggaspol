<?php

namespace Database\Seeders;

use App\Models\Donatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder Data Kategori
        $donatur = [
            [
                'donatur' => 'Sus Hardianto',
                'user_id'   => 1,
                'jumlah_telur' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'donatur' => 'Budi Setyawan',
                'user_id'   => 1,
                'jumlah_telur' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'donatur' => 'Kurnia Sandi',
                'user_id'   => 2,
                'jumlah_telur' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'donatur' => 'Dewi Setiawati',
                'user_id'   => 2,
                'jumlah_telur' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert Seeds Kategori
        Donatur::insert($donatur);
    }
}
