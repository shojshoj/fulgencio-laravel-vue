<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'store_id',
        'name',
        'description',
        'price',
        'discount',
        'is_featured',
        'product_image'
    ];

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function orderItem(){
        return $this->hasMany(OrderItem::class);
    }

    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }

    // public function favourite(){
    //     return $this->hasMany(Favourite::class);
    // }
}
