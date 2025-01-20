<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id'; 

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'quantity',
        'category',
        'cart_id',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
