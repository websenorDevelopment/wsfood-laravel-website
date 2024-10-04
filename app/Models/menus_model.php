<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menus_model extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'menus';
    protected $fillable = ['name','description','price','category_id','restaurant_id','rating','image'];

    function restaurant(){
        return $this->belongsTo(restaurant_model::class,'restaurant_id');
    }
    function categories(){
        return $this->belongsTo(categories_model::class,'category_id');
    }
    public function orderItems()
    {
        return $this->hasMany(order_items_model::class);
    }
   
}
