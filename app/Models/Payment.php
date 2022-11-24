<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['acc_number', 'amount'];

    // relasi
    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}
