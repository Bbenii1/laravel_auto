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
        Schema::dropIfExists('model');
        Schema::create('model', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('evjarat');
            $table->unsignedBigInteger('gyartoID');
               # $table->foreign('gyartoID')->references('id')->on('marka');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model');
    }
};
