<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opd extends Model
{
    use HasFactory;

    public function formAspirasi()
    {
        return $this->hasMany(formAspirasi::class, 'opd_id', 'id');
    }
}
