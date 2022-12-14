@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Data Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Pending Orders</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Date </th>
                            <th>Invoice </th>
                            <th>Amount </th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $item)
                          <tr>
                                <td>{{ $item->order_date}}</td>
                                <td>{{ $item->invoice_no}}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->payment_method }}</td>
                                <td> <span class="badge badge-pill badge-primary">{{ $item->status }} </span>  </td>

                                
                                <td width="40%">
                                  <a href="{{ route('pending-order-details', $item->id) }}" class="btn btn-info"><i class="fa fa-eye" title="Edit Data"></i></a>
                                  <a href="{{ route('invoice.download',$item->id) }}" class="btn btn-danger" title="Invoice Download" id="delete"><i class="fa fa-download"></i></a>
                                </td>
                                
                           
                          </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
    
    </div>

@endsection