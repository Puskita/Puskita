<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataDokter extends Model
{
    protected $table = 'data_dokters';
    protected $fillable = [
        'namaDokter',
        'spesialis'
    ];

    public function pendaftaranPasien()
    {
        return $this->hasManyThrough(pendaftaranPasien::class, jadwalDokter::class, 'dokter_id', 'jadwal_id');
    }

    public function jadwalDokter()
    {
        return $this->hasMany(jadwalDokter::class, 'dokter_id');
    }

    public function resepObat()
    {
        return $this->hasMany(resepObat::class, 'dokter_id');
    }
}
