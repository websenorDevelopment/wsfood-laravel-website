<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_addresses extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'addresses';
    protected $fillable = [
        'id',
        'name',
        'address',
        'user_id'

    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
