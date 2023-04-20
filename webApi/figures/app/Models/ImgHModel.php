<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class ImgHModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='imgbannerh';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'imgSlideH',
        'text'
    ];
}
