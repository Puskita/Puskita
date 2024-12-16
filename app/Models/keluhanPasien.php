<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keluhanPasien extends Model
{
    protected $table = 'keluhan_pasiens';
    protected $fillable = [
        'pendaftaran_id',
        'keluhan',
        'diagnosa',
        'riwayatPenyakit',
        'pengobatan'
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(pendaftaranPasien::class, 'pendaftaran_id');
    }

    public function resepObat()
    {
        return $this->hasMany(resepObat::class, 'keluhan_id');
    }
}
