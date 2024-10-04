<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'first_name',
        'last_name',
        'email',
        'password',
        
    ];
}
