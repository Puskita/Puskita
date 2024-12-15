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
        Schema::create('data_obats', function (Blueprint $table) {
            $table->id();
            $table->string('namaObat');
            $table->string('jenisObat');
            $table->string('dosis');
            $table->string('satuan');
            $table->integer('jumlahStok')->default(0);
            $table->integer('harga');
            $table->date('tanggalKadaluarsa');
            $table->string('produsen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_obats');
    }
};
