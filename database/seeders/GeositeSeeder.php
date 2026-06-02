<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeositeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('geosite')->insert([

    ['nama' => 'Tuktuk Siadong',       'admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['nama' => 'Bukit Beta Tuk-Tuk',   'admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['nama' => 'Pelabuhan Ambarita',   'admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['nama' => 'Air Terjun Sigarantung','admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['nama' => 'Tomok Parsaoran',      'admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['nama' => 'Huta Siallagan',       'admin_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}