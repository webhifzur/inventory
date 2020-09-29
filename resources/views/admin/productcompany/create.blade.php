@extends('layouts.master')

@section('content')
                <!-- Body Start -->

                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4">Tables</h4>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                            <li class="breadcrumb-item"><a href="{{route('productcompany.index')}}">Product Brand</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <button type="button" class="btn btn-success btn-sm float-right">  Add Brand</button>
                            </div>
                            <div class="card-body">

                            <form action="{{route('productcompany.store')}}" method="POST" >
                                @csrf
  <div class="form-group">
    <label >Company/Brand Name</label>
    <input type="text" name="name" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Origin Country</label>
    <input type="text" name="origin_country" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text"  name="address" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Contact Person</label>
    <input type="text" name="contact_person" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Mobile number</label>
    <input type="text" name="mobile_number"  class="form-control" id="">
  </div>
  
  <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button> 
</form>
                               
                              
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Body End -->


             
                @endsection