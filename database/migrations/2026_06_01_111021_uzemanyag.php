<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('uzemanyag');
        Schema::create('uzemanyag', function (Blueprint $table) {
            $table->id();
            $table->string('nev')->unique();
        });

        DB::table('uzemanyag')->insert([
            ['nev' => 'dízel'],
            ['nev' => 'benzin'],
            ['nev' => 'elektromos'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uzemanyag');
    }
};
