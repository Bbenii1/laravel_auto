<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modell')->insert([
            ['nev' => 'Civic', 'evjarat' => 2020, 'markaID' => 1, 'hajtasID' => 1, 'uzemanyagID' => 1],
            ['nev' => 'Accord', 'evjarat' => 2019, 'markaID' => 1, 'hajtasID' => 1, 'uzemanyagID' => 1],
            ['nev' => 'Clio', 'evjarat' => 2021, 'markaID' => 2, 'hajtasID' => 2, 'uzemanyagID' => 2],
            ['nev' => 'Megane', 'evjarat' => 2018, 'markaID' => 2, 'hajtasID' => 2, 'uzemanyagID' => 2],
            ['nev' => 'Twingo', 'evjarat' => 1999, 'markaID' => 2, 'hajtasID' => 2, 'uzemanyagID' => 2],
            ['nev' => 'XC90', 'evjarat' => 2022, 'markaID' => 3, 'hajtasID' => 3, 'uzemanyagID' => 3],
        ]);
    }
}
