<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class footerModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='footer';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'lefts',
        'betweens',
        'rights'
    ];
}
