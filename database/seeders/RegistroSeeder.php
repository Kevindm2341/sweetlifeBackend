<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registro')->insert([
            'fecha' => '2022-09-01',
            'hora' => '01:10:30',
            'contador' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('registro')->insert([
            'fecha' => '2022-09-01',
            'hora' => '01:30:30',
            'contador' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('registro')->insert([
            'fecha' => '2022-09-01',
            'hora' => '02:10:30',
            'contador' => 15,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('registro')->insert([
            'fecha' => '2022-09-01',
            'hora' => '03:10:30',
            'contador' => 18,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
