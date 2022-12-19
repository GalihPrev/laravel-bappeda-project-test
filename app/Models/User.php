<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function formAspirasi()
    {
        return $this->belongsTo(formAspirasi::class, 'user_id', 'id');
    }
    public function kelurahan()
    {
        return $this->belongsTo(kelurahan::class, 'kelurahan_id', 'id');
    }
    public function data_bappeda()
    {
        return $this->belongsTo(data_bappeda::class, 'user_id', 'id');
    }
    public function role()
    {
        return $this->belongsTo(role::class, 'role_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'role_id',
        'kelurahan_id',
    ];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }



    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
