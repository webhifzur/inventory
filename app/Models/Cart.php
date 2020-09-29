<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [

            'vendor',
            'bill_date',
            'due_date',
            'product',
            'qty',
            'price',
            'tax'
    ];

    public function vandor_name(){
        return $this->hasOne('App\Models\Product' , 'id' ,'product');
    }
}
