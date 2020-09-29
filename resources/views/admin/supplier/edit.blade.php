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
                            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <button type="button" class="btn btn-success btn-sm float-right">  Add Brand</button>
                            </div>
                            <div class="card-body">

                           <form action="{{route('supplier.store')}}"  method="POST"  >

                           @csrf

  <div class="row row-cols-2">
    <div class="col">
     <div class="form-group">
    <label >Supplier Name</label>
    <input type="text" name="name"   class="form-control" id="name">
  </div>
  </div>
    <div class="col">
    <div class="form-group">
    <label >Phone Number </label>
    <input type="text" name="phone" class="form-control" id="phone">
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" id="address">
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" id="address">
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Account Payable </label>
    <input type="text" name="acc_payable" class="form-control" id="acc_payable">

  </div>
    </div>

  

    
  </div>

  <button type="submit" class="btn btn-success btn-sm float-right">Add Supplier</button> 
</form>

  </form>




                            
                              
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Body End -->


             
                @endsection