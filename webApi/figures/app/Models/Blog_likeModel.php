<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class blog_likeModel extends Model
{
    use HasFactory,HasApiTokens ;
    protected $table='blog_likg';
    protected $primaryKey = 'id_Like';
    protected $fillable = [
        'id_Like',
        'id_blog',
        'id_cus',
        'likes',
        'dislike',
        'haslike',
        'hasdislike'
    ];
}
