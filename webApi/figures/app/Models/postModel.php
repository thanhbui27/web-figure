<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class postModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='blog';
    protected $primaryKey = 'id_blog';
    protected $fillable = [
        'id_blog',
        'id_cus',
        'title',
        'img_bg',
        'dates',
        'content'
    ];
}
