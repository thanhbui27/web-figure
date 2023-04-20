<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class rateModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='rate';
    protected $primaryKey = 'id_rate';
    protected $fillable = [
        'id_rate',
        'id_use',
        'id_pro',
        'rate'   
    ];
}
