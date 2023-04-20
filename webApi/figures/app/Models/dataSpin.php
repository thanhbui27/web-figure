<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class dataSpin extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='dataSpin';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nameGift',
        'img',
        'details',
        'codes'
    ];
}
