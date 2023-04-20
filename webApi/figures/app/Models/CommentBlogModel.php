<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class CommentBlogModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'comment_blog';
    protected $primaryKey = 'id_com';
    protected $fillable = [
        'id_com',
        'id_blog',
        'id_cus',
        'dates',
        'content'
    ];
}
