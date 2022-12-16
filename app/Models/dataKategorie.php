<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKategorie extends Model
{
    use HasFactory;


    protected $fillable = [
        'aspirasi_id',
        'ops_id',
        'created_at',
        'updated_at'
    ];

    public function formAspirasi()
    {
        return $this->belongsTo(formAspirasi::class, 'aspirasi_id', 'id');
    }
    public function opds()
    {
        return $this->belongsTo(opsi::class, 'ops_id', 'id');
    }
    public function data_bappeda()
    {
        return $this->hasMany(data_bappeda::class, 'data_bappeda_id', 'id');
    }
}
