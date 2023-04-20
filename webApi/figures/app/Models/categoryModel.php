<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class categoryModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'category';
    protected $primaryKey = 'id_cate';
    protected $fillable = [
        'id_cate',
        'name_cate'
    ];
}
