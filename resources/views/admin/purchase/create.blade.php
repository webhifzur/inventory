@extends('layouts.master')
@section('title', 'Create Supplier')
@push('css')
@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6 offset-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                  <li class="breadcrumb-item active">Create Supplier</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <!-- general form elements -->
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Purchase Order</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{route('cart.store')}}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="vendor">Vendor</label>
                                 <select name="vendor" class="form-control" id="vendor">
                                    <option value=""  >Select Vendor</option>
                                    @foreach($supppliers as $supplier)
                                    <option value="{{$supplier->id}}"  >  {{$supplier->name}} </option>
                                    @endforeach
                                   
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Bill Date</label>
                                 <input type="date" class="form-control" name="bill_date" value="{{ old('email') }}" placeholder="Enter Email">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Invoice No</label>
                                 <input type="text" class="form-control" name="shop_name" value="{{ old('shop_name') }}" placeholder="Enter Shop Name">
                              </div>
                              <div class="form-group">
                                 <label>Due Date</label>
                                 <input type="date" class="form-control" name="due_date" value="{{ old('email') }}" placeholder="Enter Email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                        <div class="col-md-12">
                           <table class="table">
                              <tbody>
                                 <tr>
                                    <td>
                                    <div class="form-group">
                                       <label>Product</label>
                                          <select  name="product" class="form-control" id="vendor">
                                             <option value="" > Select Product </option>
                                             @foreach($products as $product)
                                             <option value="{{ $product->id}}" > {{ $product->product_name  }}  </option>
                                             @endforeach
                                          </select>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="form-group">
                                       <label>price</label>
                                          <input type="number" class="form-control" name="price" value="" >
                                    </div>
                                    </td>
                                    <td>
                                       <div class="form-group">
                                          <label>Quantity</label>
                                          <input type="number" class="form-control" name="qty" value="" >
                                       </div>
                                    </td>
                                    <td>
                                       <button  class="btn btn-success mt-4"  type="submit"> <i class="fa fa-plus"></i></button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </form>
                        <div class="card-body">
                           <table class="table table-bordered table-striped text-center mb-3">
                                 <thead>
                                 <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th width="17%">Qty</th>
                                    <th>Price</th>
                                    <th>Sub Total</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                    @php
                                  $sub_total = 0;
                                  @endphp
                                 @foreach($carts as $cart)
                        <form name="purchase_forms" action="{{ route('cart.update',$cart->id) }}" method="post">
                              @csrf
                              @method('PATCH')
                                 <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td class="text-left">{{$cart->vandor_name->product_name}}</td>
                                    <td>
                                       <input type="number" name="qty[{{ $cart->id }}]" class="form-control" value="{{ $cart->qty }}">
                                    </td>
                                    <td>
                                       <input type="number" name="price[{{ $cart->id }}]" class="form-control" value="{{ $cart->price }}">
                                    </td>
                                    <td>{{ number_format(($cart->qty)*($cart->price) , 2)  }}</td>
                                    <td>
                                       <button type="submit" class="btn btn-sm btn-success">
                                          <i class="fa fa-check-circle" aria-hidden="true"></i>
                                       </button>
                                    </td>
                                    <td>
                                       <a href="{{ route('cart.delete',$cart->id) }}" class="btn btn-danger" type="button">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                       </a>
                                    </td>
                                 </tr>
                                 @php
                                       $sub_total += (($cart->qty)*($cart->price));
                                 @endphp
                                 @endforeach
                              </tbody>
                           </table>   
                   
                     <table class="float-right mr-2 ml-2" style="width:20%">
                        <tr>
                           <th>Subtotal:</th>
                           <td>
                              BDT{{ $sub_total }}
                           </td>
                        </tr>
                        <tr>
                           <th>Tax:</th>
                           <td>
                             BDT0
                           </td>
                        </tr>
                        <tr>
                           <th>Total:</th>
                           <td>
                              BDT{{ $sub_total }}
                           </td>
                        </tr>
                     </table>
                  </div>
                  <button type="button" class="btn btn-sm btn-success" name="purchase_btn" onclick="purchase();">Purchase</button>
                  </form>
                  {{-- <a href="{{ route('cart') }}" class="btn btn-primary">Purchase</a> --}}
               <!-- /.card -->
            </div>
            <!--/.col (left) -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
<script>
   function purchase(){
      document.forms['purchase_forms'].action="{{ route('purchase.post') }}";
      document.forms['purchase_forms'].submit();
   }
</script>