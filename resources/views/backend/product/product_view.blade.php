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
                <h3 class="box-title">Product List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Image </th>
                            <th>Product Name En</th>
                            <th>Product Name Hin </th>
                            <th>Quantity </th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $item)
                          <tr>
                            
                            <td><img src="{{asset($item->product_thambnail)}}"  style="width: 60px; height: 50px;"></td>
                
                                <td>{{ $item->product_name_en }}</td>
                                <td>{{ $item->product_name_hin }}</td>
                                <td>{{ $item->product_qty  }}</td>
                                <td>
                                    <a href="" class="btn btn-info"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                    <a href="" class="btn btn-danger" id="delete"><i class="fa fa-trash" title="Delete Data"></i></a>
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