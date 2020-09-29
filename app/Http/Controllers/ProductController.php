<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCompany;
use App\Models\ProductMeasureUnit;
use App\Models\ProductWarranty;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Products = Product::all();
        return view('admin.products.index', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
       $campanies = ProductCompany::all();
       $measureunits = ProductMeasureUnit::all();
       $ProductWarranty = ProductWarranty::all();

       return  view('admin.products.create', compact('categories', 'campanies', 'measureunits', 'ProductWarranty'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([

        'product_name' => 'required',
       'sku' =>'required',
        'buy_price' => 'required',
        'measure_unit' => 'required'

       ]);

       $product = new Product;
       $product->product_code = $request->product_code;
       $product->product_name = $request->product_name;
       $product->sku = $request->sku;
       $product->product_category = $request->product_category;

       $product->price_hint = $request->price_hint;
       $product->buy_price = $request->buy_price;
       $product->sell_price = $request->sell_price;
       $product->barcode = $request->barcode;
       $product->brand_name = $request->brand_name;
       $product->measure_unit = $request->measure_unit;
       $product->opeing_stock = $request->opeing_stock;
       $product->warranty_period = $request->warranty_period;
       $product->save();

       return redirect()->route('products.index')
       ->with('success', 'Product  Added successfully');
       



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProductCategory::all();
       $campanies = ProductCompany::all();
       $measureunits = ProductMeasureUnit::all();
       $ProductWarranty = ProductWarranty::all();
       $products = Product::find($id);

        return view('admin.products.edit', compact('products','categories', 'campanies' , 'measureunits', 'ProductWarranty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'product_name' => 'required',
            'sku' =>'required',
             'buy_price' => 'required',
             'measure_unit' => 'required'

        ]);

        $product = Product::find($id);
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->product_category = $request->product_category;
 
        $product->price_hint = $request->price_hint;
        $product->buy_price = $request->buy_price;
        $product->sell_price = $request->sell_price;
        $product->barcode = $request->barcode;
        $product->brand_name = $request->brand_name;
        $product->measure_unit = $request->measure_unit;
        $product->opeing_stock = $request->opeing_stock;
        $product->warranty_period = $request->warranty_period;
        $product->save();
        return redirect()->route('products.index')
       ->with('success', 'Product  Updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success', 'Product  Deleted successfully');
    }
}
