<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendaftaranPasien extends Model
{
    protected $table = 'pendaftaran_pasiens';
    protected $fillable = [
        'noRegistrasi',
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
        'pekerjaan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->noRegistrasi = 'REG-' . strtoupper(uniqid());
        });
    }
}
