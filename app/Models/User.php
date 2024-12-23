<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{   use HasFactory;
    protected $primaryKey = 'user_id'; 

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'user_number',
        'password',
    ];
    public $timestamps = true;
}
