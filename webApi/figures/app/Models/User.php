<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'account';
    protected $primaryKey = 'id_ac';
    protected $fillable = [
        'id_ac',
        'name',
        'username',
        'password',
        'authToken',
        'provider',
        'provider_id',
        'quyen'
    ];

} 
