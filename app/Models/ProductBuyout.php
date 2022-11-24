<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBuyout extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'cart_id',
        'checkout_id',
        'product_id',
        'total',
        'qty',
    ];

    // relasi
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
