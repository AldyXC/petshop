<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'image1',
        'image2',
        'image3',
        'category_id',
    ];

    // relasi
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productbuyout()
    {
        return $this->hasMany(ProductBuyout::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
}
