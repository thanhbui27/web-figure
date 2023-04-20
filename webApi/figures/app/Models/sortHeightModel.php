<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class sortHeightModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='sortHeight';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'heightStart',
        'heightEnd'
    ];
}
