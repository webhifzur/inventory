

               @extends('layouts.master')
               @section('content')
               
               <main>
                    <div class="container-fluid">
                    <h4 class="mt-4">Tables</h4>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <button type="button" class="btn btn-success btn-sm float-right">  Add Brand</button>
                            </div>
                            <div class="card-body">

                            <form action="{{route('productcompany.update', $ProductCompany->id)}}" method="POST" >
                            @csrf
                            @method('PUT')

                            
  <div class="form-group">
    <label >Company/Brand Name</label>
    <input type="text" value="{{ $ProductCompany->name }}" name="name" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Origin Country </label>
    <input type="text" value="{{ $ProductCompany->origin_country }}" name="origin_country" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text"  value="{{ $ProductCompany->address }}"  name="address" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Contact Person</label>
    <input type="text"   value="{{ $ProductCompany->contact_person }}" name="contact_person" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Mobile number</label>
    <input type="text"  value="{{ $ProductCompany->mobile_number }}"  name="mobile_number"  class="form-control" id="">
  </div>
  
  <button type="submit" class="btn btn-success btn-sm float-right">Update</button> 
</form>
                               
                              
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Body End -->

                @endsection


           