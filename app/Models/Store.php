<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'has_local',
        'phone_number',
        'store_image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function storeInfo(){
    //     return $this->hasOne(StoreInfo::class);
    // }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
