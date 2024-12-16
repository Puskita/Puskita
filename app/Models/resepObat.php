<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resepObat extends Model
{
    protected $table = 'resep_obats';
    protected $fillable = [
        'keluhan_id',
        'obat_id',
        'dokter_id',
        'jumlah',
        'aturanPakai'
    ];

    public function keluhan()
    {
        return $this->belongsTo(keluhanPasien::class, 'keluhan_id');
    }

    public function obat()
    {
        return $this->belongsTo(dataObat::class, 'obat_id');
    }

    public function dokter()
    {
        return $this->belongsTo(dataDokter::class, 'dokter_id');
    }
}
