<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'phone',
        'email',
        'address',
        'acc_payable',
        'city',
        'type',
        'shop_name',
        'photo'

    ];
}
