<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Binaan;
use Illuminate\Database\Seeder;
use Database\Seeders\DesaSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\InstansiSeeder;
use Database\Seeders\RoleUserSeeder;
use Database\Seeders\TypeUserSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\PermissionRoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Sus Hardianto',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password'),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at'  => date('Y-m-d H:i:s'),
        // ]);

        // User Seeder
        $this->call([
            UserSeeder::class,
        ]);

        // Seeder Data Instansi
        $this->call([
            InstansiSeeder::class,
        ]);

        // Seeder Data Donatur
        $this->call([
            DonaturSeeder::class,
        ]);

        // Seeder Data Kecamatan
        $this->call([
            KecamatanSeeder::class,
        ]);

        // Seeder Data Kecamatan
        $this->call([
            DesaSeeder::class,
        ]);

        // Seeder Wilayah Binaan
        $this->call([
            BinaanSeeder::class,
        ]);

        // Seeder Type User
        $this->call([
            TypeUserSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            PermissionRoleSeeder::class,
            RoleUserSeeder::class,
            DistribusiSeeder::class,
        ]);
    }
}
