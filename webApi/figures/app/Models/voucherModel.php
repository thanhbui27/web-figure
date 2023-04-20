<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class voucherModel extends Model
{
    use HasFactory,HasApiTokens;
    protected $table='voucher';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'codes',
        'names',
        'timeStart',
        'timeEnd',
        'kindVoucher',
        'limits',
        'detail',
        'sale'
    ];
}
