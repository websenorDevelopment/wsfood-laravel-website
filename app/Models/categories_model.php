<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories_model extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categories';

    protected $fillable = ['name','image'];

    function restaurant(){
        return $this->belongsToMany(restaurant_model::class,'restaurant_categories','category_id', 'restaurant_id');
    }
    function menus(){
        return $this->hasMany(menus_model::class,'category_id');
    }
}
