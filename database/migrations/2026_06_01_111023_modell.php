<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('modell');
        Schema::create('modell', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->year('evjarat');
            $table->unsignedBigInteger('markaID');
            $table->unsignedBigInteger('hajtasID');
            $table->unsignedBigInteger('uzemanyagID');
            $table->foreign('markaID')->references('id')->on('marka')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('hajtasID')->references('id')->on('hajtas')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('uzemanyagID')->references('id')->on('uzemanyag')->cascadeOnUpdate()->restrictOnDelete();
        });

        Schema::table('marka', function (Blueprint $table) {
            $table->foreign('orszagID')->references('id')->on('orszag')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('marka', function (Blueprint $table) {
            $table->dropForeign(['orszagID']);
        });

        Schema::dropIfExists('modell');
    }
};
