<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategory = ProductCategory::latest()->paginate(5);
        return view('admin.productcategory.index', compact('productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productcategory.create');
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

        $productcategory = new ProductCategory;

        $productcategory->name = $request->name;
        $productcategory->description = $request->description;
        $productcategory->save();

        return redirect()->route('productcategory.index')
       ->with('success', 'Category  Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductCategory = ProductCategory::find($id); 

       
         return view('admin.productcategory.edit' , compact('ProductCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name'=> 'required'


        ]);
        
        
        $ProductCategory = ProductCategory::find($id); 
        $ProductCategory->name = $request->name;
        $ProductCategory->description = $request->description;
       

        $ProductCategory->save();
        return redirect()->route('productcategory.index')
        ->with('success', 'Company  updated successfully');

        // $post->title = $request->title;
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productcategory)
    {
        $productcategory->delete();

        return redirect()->route('productcategory.index')
        ->with('success', 'Category  Deleted successfully');
    }
}
