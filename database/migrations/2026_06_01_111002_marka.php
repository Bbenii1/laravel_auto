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
        Schema::dropIfExists('marka');
        Schema::create('marka', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->unsignedBigInteger('orszagID');
               # $table->foreign('orszagID')->references('id')->on('orszag');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marka');
    }
};
