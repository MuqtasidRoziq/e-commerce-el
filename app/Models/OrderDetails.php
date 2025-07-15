<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price', 'subtotal'];

    // Setiap detail order milik satu produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Setiap detail order juga milik satu order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
