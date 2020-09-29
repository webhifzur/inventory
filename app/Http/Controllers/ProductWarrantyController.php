<?php

namespace App\Http\Controllers;

use App\Models\ProductWarranty;
use Illuminate\Http\Request;

class ProductWarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productwarranty = ProductWarranty::all();
        return view('admin.productwarranty.index', compact('productwarranty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.productwarranty.create');
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

            'name'
        ]);

        $warranty = new ProductWarranty;
        $warranty->name = $request->name;
        $warranty->save();
        return redirect()->route('productwarranty.index')
        ->with('success', 'ProductWarranty  Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductWarranty  $productWarranty
     * @return \Illuminate\Http\Response
     */
    public function show(ProductWarranty $productWarranty)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductWarranty  $productWarranty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductWarranty = ProductWarranty::find($id);
        return view('admin.productwarranty.edit', compact('ProductWarranty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductWarranty  $productWarranty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name'


        ]);

     

           ProductWarranty::find($id)->update([

            'name' => $request->name


           ]);

           return redirect()->route('productwarranty.index')
           ->with('success', 'ProductWarranty  Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductWarranty  $productWarranty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductWarranty::find($id)->delete();
        return redirect()->route('productwarranty.index')
           ->with('success', 'ProductWarranty  Deleted successfully');
    }
}
