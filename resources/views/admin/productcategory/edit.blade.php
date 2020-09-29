

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

                            <form action="{{route('productcategory.update', $ProductCategory->id)}}" method="POST" >
                            @csrf
                            @method('PUT')

                            
  <div class="form-group">
    <label >Category name</label>
    <input type="text" value="{{ $ProductCategory->name }}" name="name" class="form-control" id="">
  </div>
  <div class="form-group">
    <label >Description</label>
    <input type="text" value="{{ $ProductCategory->description }}" name="description" class="form-control" id="">
  </div>
  
  
  <button type="submit" class="btn btn-success btn-sm float-right">Update</button> 
</form>
                               
                              
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Body End -->

                @endsection


           