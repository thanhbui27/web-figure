<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class commentDPModel extends Model
{
    use HasFactory,HasApiTokens;

    protected $table = 'comment_product';

    protected $fillable = [
        'id_com',
        'id_pro',
        'id_cus',
        'date',
        'content',
        'likes',
        'dislike',
        'haslike',
        'hasdislike',
    ];
}
