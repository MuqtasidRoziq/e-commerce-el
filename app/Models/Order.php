<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['user_id', 'order_date', 'total_amount', 'status', 'resi'];

    // Satu order memiliki banyak detail
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }

    // (Opsional) Jika kamu punya sistem login user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
