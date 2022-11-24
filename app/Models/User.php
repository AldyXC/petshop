<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'name', 'email', 'nomor', 'password', 'is_admin'
    ];

    // relasi
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
}
