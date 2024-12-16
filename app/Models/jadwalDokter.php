<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwalDokter extends Model
{
    protected $table = 'jadwal_dokters';
    protected $fillable = [
        'dokter_id',
        'tanggalMulai',
        'tanggalSelesai',
        'ruangan'
    ];

    public function dokter()
    {
        return $this->belongsTo(dataDokter::class, 'dokter_id');
    }

    public function pendaftaranPasien()
    {
        return $this->hasMany(pendaftaranPasien::class);
    }
}
