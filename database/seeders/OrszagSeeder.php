<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrszagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orszag')->insert([
            ['nev' => 'Japán', 'rovid_nev' => 'JP'],
            ['nev' => 'Németország', 'rovid_nev' => 'DE'],
            ['nev' => 'Franciaország', 'rovid_nev' => 'FR'],
            ['nev' => 'Svédország', 'rovid_nev' => 'SE'],
        ]);
    }
}
