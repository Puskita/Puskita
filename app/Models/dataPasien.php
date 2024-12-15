<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataPasien extends Model
{
    protected $table = 'data_pasiens';
    protected $fillable = [
        'nik',
        'namaLengkap',
        'tanggalLahir',
        'tempatLahir',
        'jenisKelamin',
        'kebangsaan',
        'alamat',
        'wilayah',
        'kodePos',
        'noTelp',
        'goldar',
        'agama',
        'status',
        'pekerjaan'
    ];

    public function pendaftaranPasien()
    {
        return $this->hasMany(pendaftaranPasien::class, 'data_pasien_id');
    }
}
