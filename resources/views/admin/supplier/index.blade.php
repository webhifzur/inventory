@extends('layouts.master')

@section('content')


<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>

                        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               <a class="btn btn-success btn-sm float-right" href="{{route('supplier.create')}}">Add Supplier</a> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                              
                                                <th>Account Payble</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                           
                                        <th>SL</th>  
                                          
                                            <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                             
                                                <th>Account Payble</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @forelse($Supplier as $supplier)
                                       
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$supplier->name}}</td>
                                                <td>{{$supplier->phone}}</td>
                                                <td>{{$supplier->email}}</td>  
                                                <td>{{$supplier->address}}</td>  
                                                <td>{{$supplier->acc_payable}}</td>
                                               

                                                
                                               
                                                <td>  <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" >
                                               
                                                
                                                
                                                <a  class="btn btn-success btn-sm"  href="{{route('supplier.edit', $supplier->id)}}"><i class="fas fa-pen" ></i></a>

                                                @csrf
                                                 @method('DELETE')
                                                

                                                <button class="btn btn-danger btn-sm " type="submit" ><i class="fas fa-trash" ></i></button>
                                                
                                                
                                                </form>  </td>
                                            </tr>
                                            @empty
                                        

                                            @endforelse
                                          
                                        </tbody>
                                    </table>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection