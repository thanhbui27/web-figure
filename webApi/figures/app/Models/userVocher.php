<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class userVocher extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='uservoucher';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        "id" ,
        "id_use" ,
        "use",
        "id_voucher" ,
        "dates"
    ];
}
