<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id'; // Use 'user_id' instead of default 'id'

    protected $fillable = [
        'user_name',  // Use 'user_name' instead of 'name'
        'user_email', // Use 'user_email' instead of 'email'
        'user_number',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Ensure Laravel recognizes 'user_name' as 'name'
    public function getNameAttribute()
    {
        return $this->attributes['user_name'] ?? null;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['user_name'] = $value;
    }

    // Ensure Laravel recognizes 'user_email' as 'email'
    public function getEmailAttribute()
    {
        return $this->attributes['user_email'] ?? null;
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['user_email'] = $value;
    }
}
