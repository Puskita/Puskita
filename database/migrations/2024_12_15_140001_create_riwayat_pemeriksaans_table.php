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
        Schema::create('riwayat_pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluhan_id')->constrained('keluhan_pasiens')->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained('data_dokters')->onDelete('cascade');
            $table->foreignId('resep_id')->constrained('resep_obats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pemeriksaans');
    }
};
