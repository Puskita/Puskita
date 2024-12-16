<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dataDokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            ['namaDokter' => 'Dr. Ferdi M.', 'spesialis' => 'GIGI'],
            ['namaDokter' => 'Dr. Guspa R.', 'spesialis' => 'UMUM'],
            ['namaDokter' => 'Dr. Sajidah F.', 'spesialis' => 'UMUM'],
        ];

        // Insert data ke tabel dokters
        foreach ($dokters as $dokter) {
            dataDokter::create($dokter);
        }
    }
}
