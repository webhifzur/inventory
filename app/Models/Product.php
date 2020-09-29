<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    // public static function RandomKeywordForProductCode()
    // {
    //    $text = 'ABCDE'; 
    //    $random = rand(10000, 99999); 
    //    $productCode = "#$text$random";
    //    return $productCode;
    // }

    public static  function random()
    {
        $text = 'ABCDE';
        $randon = rand(10000, 99999);
        $productCode = "#$text$randon";
        return $productCode;
    }


    // public function category()
    // {
    // 	return $this->belongsTo(Category::class,'category_id');
    // }

    // public function category()
    // {
    //     return $this->belongsTo('App\Category');
    // }


    public function productcategory()
    {
         return $this->belongsTo('App\Models\ProductCategory','product_category' );

    }

    public function productcompany()
    {
        return $this->belongsTo('App\Models\ProductCompany', 'brand_name');
    }

    public function measureunit()
    {
       return $this->belongsTo('App\Models\ProductMeasureunit', 'measure_unit');
    }


    protected $fillable = [

        'product_code',
        'product_name',
        'sku',
        'price_hint',
        'buy_price',
        'sell_price',
        'barcode',
        'product_category',
        'brand_name',
        'measure_unit',
        'opeing_stock',
        'warranty_period'



    ];
}
