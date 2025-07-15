<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Binafy\LaravelCart\Cartable;

class Product extends Model implements Cartable
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'product_category_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categories::class, 'product_category_id');
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
