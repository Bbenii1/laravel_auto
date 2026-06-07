<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class MarkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marka')->insert([
            ['nev' => 'Honda', 'orszagID' => 1],
            ['nev' => 'Renault', 'orszagID' => 3],
            ['nev' => 'Volvo', 'orszagID' => 4],
        ]);
    }
}
