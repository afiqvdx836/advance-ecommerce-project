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
            
          <div class="col-8">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Brand List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Brand En</th>
                              <th>Brand Hin</th>
                              <th>Image</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($brands as $item)
                          <tr>
                            
                                <td>{{ $item->brand_name_en }}</td>
                                <td>{{ $item->brand_name_hin }}</td>
                                <td><img src="{{ asset($item->brand_image) }}" style="width: 70px; height=40px;" alt=""></td>
                                <td>
                                    <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                    <a href="{{ route('brand.delete', $item->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash" title="Delete Data"></i></a>
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


        <!------ Add Brand Page -->

        <div class="col-4">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Brand</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                    <form method="post" action="{{ route('brand.store') }}" enctype="multipart/form-data" >
                        @csrf
               
               
                    <div class="form-group">
                       <h5>Brand Name English  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text" id="brand_name_en" name="brand_name_en" class="form-control" > </div>
                   </div>
               
                   @error('brand_name_en')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
               
                   <div class="form-group">
                       <h5>Brand Name Hindi  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text"  name="brand_name_hin" class="form-control"  > </div>
                   </div>
               
                   @error('brand_name_hin')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
               
                   <div class="form-group">
                       <h5>Brand Image  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="file"  name="brand_image" class="form-control"  > </div>
                   </div>

                   @error('brand_image')
                   <span class="text-danger">{{$message}}</span>
                  @enderror
                                   
               
                            <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
                                       </div>
                </form>
               
                   </div>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
 
             
             <!-- /.box -->          
           </div>

        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>

    
@endsection