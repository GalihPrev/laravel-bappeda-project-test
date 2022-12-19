<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;


    public function formAspirasi()
    {
        return $this->belongsTo(formAspirasi::class, 'aspirasi_id', 'id');
    }
    public function user()
    {

        return $this->hasMany(User::class, 'kelurahan_id', 'id');
    }
    public function data_bappeda()
    {
        return $this->hasMany(data_bappeda::class, 'kelurahan_id', 'id');
    }
}
