<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'restaurant';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'state',
        'city',
        'opening_time',
        'closing_time',
        'rating',
        'description',
        'image',
        'latitude',
        'longitude',
    ];
    use HasFactory;

    function categories()
    {
        return $this->belongsToMany(categories_model::class, 'restaurant_categories', 'restaurant_id', 'category_id');
    }
    function cuisines()
    {
        return $this->belongsToMany(cuisines_model::class, 'cuisine_restaurant', 'restaurant_id', 'cuisine_id');
    }
    function menus()
    {
        return $this->hasMany(menus_model::class,'restauarnt_id');
    }
    public function orders()
    {
        return $this->hasMany(orders::class, 'restaurant_id');
    }
}


