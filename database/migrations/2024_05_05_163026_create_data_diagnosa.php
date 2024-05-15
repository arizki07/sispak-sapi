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
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id('id_diagnosa');
            $table->unsignedBigInteger('id_penyakit');
            $table->float('cf');
            $table->float('presentase');
            $table->timestamps();

            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosa');
    }
};
