<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class productModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'product';
    protected $primaryKey = 'id_pro';
    protected $fillable = [
        'id_pro',
        'id_Cate',
        'name_pro',
        'price_old',
        'price_new',
        'soluong',
        'danhgia',
        'mieuta',
        'chieucao',
        'image',
        'xuatsu',
        'noibat'
    ];
  
}
