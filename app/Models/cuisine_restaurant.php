<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuisine_restaurant extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cuisine_restaurant';
    protected $fillable = ['cuisine_id','restaurant_id'];
}
