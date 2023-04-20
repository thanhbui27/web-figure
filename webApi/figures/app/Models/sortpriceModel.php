<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class sortpriceModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='sortprice';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'pricetStart',
        'pricetEnd'
    ];
}
