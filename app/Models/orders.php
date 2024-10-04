<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'restaurant_id',
        'order_number',
        'total_amount',
        'address',
        'status',

    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function orderItems()
    {
        return $this->hasMany(order_items_model::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(restaurant_model::class, 'restaurant_id');
    }
}
