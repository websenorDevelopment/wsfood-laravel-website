<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant_categories_model extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'restaurant_categories';
    protected $fillable = ['category_id','restaurant_id'];
}
