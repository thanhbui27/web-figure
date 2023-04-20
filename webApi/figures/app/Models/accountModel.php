<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class accountModel extends Model
{
    use HasFactory,HasApiTokens ;
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
