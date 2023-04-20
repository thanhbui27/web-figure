<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class personModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'person';
    protected $primaryKey = 'id_per';
    protected $fillable = [
        'id_per',
        'fullname',
        'email',
        'dates',
        'cmnd',
        'adress',
        'sdt',
        'img'
    ];
}
