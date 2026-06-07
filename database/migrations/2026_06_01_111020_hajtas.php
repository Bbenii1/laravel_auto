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
        Schema::dropIfExists('hajtas');
        Schema::create('hajtas', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 3)->unique();
        });

        DB::table('hajtas')->insert([
            ['nev' => 'AWD'],
            ['nev' => 'FWD'],
            ['nev' => 'RWD'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajtas');
    }
};
