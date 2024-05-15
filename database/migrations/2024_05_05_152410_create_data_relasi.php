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
        Schema::create('relasi', function (Blueprint $table) {
            $table->id('id_relasi');
            $table->unsignedBigInteger('id_penyakit');
            $table->unsignedBigInteger('id_gejala');
            $table->float('mb');
            $table->float('md');
            $table->float('cf');
            $table->timestamps();

            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit');
            $table->foreign('id_gejala')->references('id_gejala')->on('gejala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi');
    }
};
