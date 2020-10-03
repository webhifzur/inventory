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
                <form role="form" action="" method="post">
                @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <h1>Vendor Info</h1>
                              <ul style="list-style-type: none;">
                                  <li>Name :</li>
                                  <li>Address :</li>
                                  <li>Mobile :</li>
                                  <li>Email :</li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <h1>Selling Info</h1>
                              <ul style="list-style-type: none;">
                                  <li>Date :</li>
                                  <li>Payment :</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                        <div class="card-body">
                           <table class="table table-bordered table-striped text-center mb-3">
                                 <thead>
                                 <tr>
                                    <th>S.N</th>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Sub Total</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                @php
                                  $sub_total = 0;
                                @endphp
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                @php
                                  $sub_total = 0;
                                @endphp
                              </form>
                              </tbody>
                           </table>   
                   
                     <table class="float-right mr-2 ml-2" style="width:20%">
                        <tr>
                           <th>Subtotal:</th>
                           <td>
                              BDT
                           </td>
                        </tr>
                        <tr>
                           <th>Tax:</th>
                           <td>
                             BDT
                           </td>
                        </tr>
                        <tr>
                           <th>Total:</th>
                           <td>
                              BDT
                           </td>
                        </tr>
                        <tr>
                            <td class="ml-5">
                                <button class="btn btn-primary mt-3">Submit</button>
                            </td>
                        </tr>
                     </table>
                  </div>
                </form>
               <!-- /.card -->
            </div>
            <!--/.col (left) -->
         </div>
         <!-- /.row -->
      </div>
    </section>




   @endsection