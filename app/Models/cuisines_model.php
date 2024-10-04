<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuisines_model extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cuisines';

    protected $fillable = ['name'];

    function restaurant(){
        return $this->belongsToMany(restaurant_model::class,'cuisine_restaurant','cuisine_id', 'restaurant_id');
    }

}
