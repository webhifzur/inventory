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

                           <form action="{{route('products.update', $products->id)}}"  method="POST"  >

                           @csrf
                           @method('PUT')

  <div class="row row-cols-3">
    <div class="col">
     <div class="form-group">
    <label >Product Code</label>
    <input type="text" name="product_code" value="{{$products->product_code}}" class="form-control" id="">
  </div>
  </div>
    <div class="col">
    <div class="form-group">
    <label >Product Name </label>
    <input type="text" name="product_name" value="{{$products->product_name}}" class="form-control" id="">
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Varient/SKU </label>
    <input type="text" name="sku" value="{{$products->sku}}" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Price Code/Hint</label>
    <input type="text" name="price_hint"  value="{{$products->price_hint}}" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Buy Price </label>
    <input type="text" name="buy_price" value="{{$products->buy_price}}" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Sell Price (MRP) </label>
    <input type="text" name="sell_price" value="{{$products->sell_price}}" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Barcode</label>
    <input type="text" name="barcode" value="{{$products->barcode}}" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Product Category</label>
    <select name="product_category" class="form-control" id="">
    @foreach (\App\Models\ProductCategory::select('id','name')->get() as $item)
               <option value="{{ $item->id }}" {{ $products->product_category == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
      </select>
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Company/Brand Name</label>
    <select name="brand_name" class="form-control" id="">
    @foreach (\App\Models\ProductCompany::select('id','name')->get() as $item)
               <option value="{{ $item->id }}" {{ $products->brand_name == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
      </select>
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Measure Unit</label>
    <select name="measure_unit" class="form-control" id="">
        
        @foreach (\App\Models\ProductMeasureUnit::select('id','name')->get() as $item)
               <option value="{{ $item->id }}" {{ $products->measure_unit == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach
        
      </select>
    
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Opening Stock</label>
    <input type="text"  value="{{$products->opeing_stock}}"    name="opeing_stock" class="form-control" id="">
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label >Warranty Period</label>
    <select     name="warranty_period" class="form-control" id="">
    @foreach (\App\Models\ProductWarranty::select('id','name')->get() as $item)
               <option value="{{ $item->id }}" {{ $products->warranty_period == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
            @endforeach

            </select>
  </div>
    </div>

  

    
  </div>

  <button type="submit" class="btn btn-success btn-sm float-right">Update Product</button> 
</form>

  </form>




                            
                              
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Body End -->


             
                @endsection