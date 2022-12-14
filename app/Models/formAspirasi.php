<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formAspirasi extends Model
{
    use HasFactory;
    protected $fillable = [

        'permasalahan',
        'penyebab',
        'lokasi',
        'usulan',
        'keterangan',
        'users_id',
        'kelurahan_id',
        'created_at',
        'updated_at',
    ];



    public function keluarahan()
    {
        return $this->hasMany(kelurahan::class, 'kelurahan_id', 'id');
    }

    public function opds()
    {
        return $this->hasMany(opds::class, 'opd_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function dataKategori()
    {
        return $this->hasMany(dataKategori::class, 'aspirasi_id', 'id');
    }

    public function data_bappeda()
    {
        return $this->hasMany(data_bappeda::class, 'form_aspirasi_id', 'id');
    }
}
