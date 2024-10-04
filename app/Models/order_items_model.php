<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items_model extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo(orders::class);
    }

    public function menuItem()
    {
        return $this->belongsTo(menus_model::class);
    }
}
