<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['user_id'];

    // relasi
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function productbuyout()
    {
        return $this->belongsTo(ProductBuyout::class);
    }
}
