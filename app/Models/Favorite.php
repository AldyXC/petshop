<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'product_id'];

    // relasi
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
