<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataObat extends Model
{
    protected $table = 'data_obats';
    protected $fillable = [
        'namaObat',
        'jenisObat',
        'dosis',
        'satuan',
        'jumlahStok',
        'harga',
        'tanggalKadaluarsa',
        'produsen'
    ];

    public function resepObat()
    {
        return $this->hasMany(resepObat::class, 'obat_id');
    }
}
