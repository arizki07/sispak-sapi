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
        Schema::create('diagnosa_gejala', function (Blueprint $table) {
            $table->id('id_diagnosa_gejala');
            $table->unsignedBigInteger('id_diagnosa');
            $table->unsignedBigInteger('id_gejala');
            $table->integer('id_penyakit',);
            $table->integer('id_cf_user');
            $table->float('cf_hasil');
            $table->float('cf_pakar');
            $table->timestamps();

            // Definisikan foreign key untuk kolom id_diagnosa
            $table->foreign('id_diagnosa')->references('id_diagnosa')->on('diagnosa')
                ->onDelete('cascade'); // On Delete Cascade

            // Definisikan foreign key untuk kolom id_gejala
            $table->foreign('id_gejala')->references('id_gejala')->on('gejala')
                ->onDelete('cascade'); // On Delete Cascade
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosa_gejala');
    }
};
