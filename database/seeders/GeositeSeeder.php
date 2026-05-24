<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeositeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('geosite')->insert([

            [
                'nama' => 'Tuktuk Siadong',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Bukit Beta Tuk-Tuk',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Desa Tomok',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Makam Raja Sidabutar',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Pertunjukan Sigale-gale',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Batu Marhosa',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Pasar Souvenir Tomok',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Huta Siallagan',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Kursi Batu Persidangan',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Museum Huta Siallagan',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nama' => 'Rumah Adat Batak Ambarita',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}