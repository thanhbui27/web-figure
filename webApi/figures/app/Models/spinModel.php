<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class spinModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='Spinning';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_user',
        "money",
        'total',
        'remaining'
    ];
}
