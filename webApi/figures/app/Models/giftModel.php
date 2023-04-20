<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class giftModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='gift';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_user',
        'nameGift',
        'details',
        'dateGet'
    ];
}
