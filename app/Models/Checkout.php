<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'date',
        'checkout_code',
        'user_id',
        'payment_id',
    ];

    // relasi
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function productbuyout()
    {
        return $this->hasMany(ProductBuyout::class);
    }
}
