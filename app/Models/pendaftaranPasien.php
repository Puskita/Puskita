<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendaftaranPasien extends Model
{
    protected $table = 'pendaftaran_pasiens';
    protected $fillable = [
        'noRegistrasi',
        'pasien_id',
        'jadwal_id',
        'jenisLayanan',
        'antrean'
    ];

    public function dataPasien()
    {
        return $this->belongsTo(dataPasien::class, 'pasien_id');
    }

    public function jadwalDokter()
    {
        return $this->belongsTo(jadwalDokter::class, 'jadwal_id');
    }

    public function dokter()
    {
        return $this->hasOneThrough(dataDokter::class, jadwalDokter::class, 'id', 'id', 'jadwal_id', 'dokter_id');
    }

    public function keluhan()
    {
        return $this->hasMany(keluhanPasien::class, 'pendaftaran_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->noRegistrasi = 'REG-' . strtoupper(uniqid());
        });

        static::creating(function ($model) {
            $model->antrean = self::max('antrean') + 1;
        });
    }
}
