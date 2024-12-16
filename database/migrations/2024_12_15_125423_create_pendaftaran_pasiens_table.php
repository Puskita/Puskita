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
        Schema::create('pendaftaran_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('noRegistrasi');
            $table->foreignId('pasien_id')->constrained('data_pasiens')->onDelete('cascade');
            $table->foreignId('jadwal_id')->constrained('jadwal_dokters')->onDelete('cascade');
            $table->string('jenisLayanan');
            $table->unsignedInteger('antrean')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_pasiens');
    }
};
