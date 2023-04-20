<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favProductModel extends Model
{
    use HasFactory;
    protected $table = 'favProduct';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_pro',
        'id_user'     
    ];
}
