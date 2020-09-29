<?php

namespace App\Http\Controllers;

use App\Models\ProductMeasureUnit;
use Illuminate\Http\Request;

class ProductMeasureUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProductMeasureUnit = ProductMeasureUnit::latest()->paginate(5);
        return view('admin.productmeasureunit.index', compact('ProductMeasureUnit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productmeasureunit.create');
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

            'name' => 'required'


        ]);

        $ProductMeasureUnit = new ProductMeasureUnit;

        $ProductMeasureUnit->name = $request->name;
        // $ProductMeasureUnit->description = $request->description;
        $ProductMeasureUnit->save();

        return redirect()->route('productmeasureunit.index')
       ->with('success', 'Category  Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductMeasureUnit  $productMeasureUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ProductMeasureUnit $productMeasureUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductMeasureUnit  $productMeasureUnit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productMeasureUnit = productMeasureUnit::find($id); 

       
         return view('admin.productmeasureunit.edit' , compact('productMeasureUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductMeasureUnit  $productMeasureUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name'=> 'required'


        ]);
        
        
        $ProductMeasureUnit = ProductMeasureUnit::find($id); 
        $ProductMeasureUnit->name = $request->name;
        // $ProductMeasureUnit->description = $request->description;
       

        $ProductMeasureUnit->save();
        return redirect()->route('productmeasureunit.index')
        ->with('success', 'Company  updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductMeasureUnit  $productMeasureUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductMeasureUnit::find($id)->delete();

        return redirect()->route('productmeasureunit.index')
        ->with('success', 'MeasureUnit  Deleted successfully');
    }
}
