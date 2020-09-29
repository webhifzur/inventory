<?php

namespace App\Http\Controllers;

use App\Models\ProductCompany;
use Illuminate\Http\Request;

class ProductCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcompany = productcompany::latest()->paginate(5);
        
        
        return view('admin.productcompany.index', compact('productcompany'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.productcompany.create');
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

        'name'=> 'required'


       ]);

       $company = new ProductCompany;
       $company->name = $request->name;
       $company->origin_country = $request->origin_country;
       $company->address = $request->address;
       $company->mobile_number = $request->mobile_number;
       $company->contact_person = $request->contact_person;
       $company->save();

       return redirect()->route('productcompany.index')
       ->with('success', 'Company  Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCompany  $productCompany
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCompany $productCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCompany  $productCompany
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductCompany = ProductCompany::find($id); 

       
         return view('admin.productcompany.edit' , compact('ProductCompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCompany  $productCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name'=> 'required'


        ]);
        
        
        $ProductCompany = ProductCompany::find($id); 
        $ProductCompany->name = $request->name;
        $ProductCompany->origin_country = $request->origin_country;
        $ProductCompany->address = $request->address;
        $ProductCompany->contact_person = $request->contact_person;
        $ProductCompany->mobile_number = $request->mobile_number;

        $ProductCompany->save();
        return redirect()->route('productcompany.index')
        ->with('success', 'Company  updated successfully');

        // $post->title = $request->title;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCompany  $productCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCompany $productcompany)
    {
        $productcompany->delete();

        return redirect()->route('productcompany.index')
        ->with('success', 'Company  Deleted successfully');
    }
}
