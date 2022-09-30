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
                <h3 class="box-title">Slider List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Slider Image </th>
                            <th>Title</th>
                            <th>Decription</th>
                            <th>Status</th>
                            <th>Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($sliders as $item)
                          <tr>

                            
                                <td><img src="{{asset($item->slider_img)}}" style="width: 70px; height=40px;" alt=""></td>
                                <td>
                                    @if ($item->title == NULL)
                                    <span class="badge badge-pill badge-danger"> No Title </span>
                                    @else
                                        {{$item->title}}
                                    @endif
                                </td>
                                <td>{{$item->description}}</td>

                                <td>
                                    @if ($item->status == 1)
                                    <span class="badge badge-pill badge-success"> Active </span>
                                    @else
                                    <span class="badge badge-pill badge-danger"> In Active </span>
                                    @endif
                                </td>

                                
                                <td>
                                    <a href="{{ route('slider.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                    <a href="{{ route('slider.delete', $item->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash" title="Delete Data"></i></a>
                                    @if ($item->status == 1)
                                    <a href="{{ route('product.inactive', $item->id) }}" class="btn btn-danger"><i class="fa fa-arrow-down" title="InActive Now"></i></a>
                                    @else
                                    <a href="{{ route('product.active', $item->id) }}" class="btn btn-success"><i class="fa fa-arrow-up" title="Active Now"></i></a>
                                    @endif
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
                 <h3 class="box-title">Add Slider</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                    <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data" >
                        @csrf
               
               
                    <div class="form-group">
                       <h5>Slide Title  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text" name="title" class="form-control" > </div>
                   </div>
               
                   @error('title')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
               
                   <div class="form-group">
                       <h5>Slider Description <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text"  name="description" class="form-control"  > </div>
                   </div>
               
                   @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
               
                   <div class="form-group">
                       <h5>Slider Image  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="file"  name="slider_img" class="form-control"  > </div>
                   </div>

                   @error('slider_img')
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