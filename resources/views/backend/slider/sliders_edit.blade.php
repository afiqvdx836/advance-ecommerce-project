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
        <!------ Add Brand Page -->

        <div class="col-12">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Edit Slider</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                    <form method="post" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data" >
                        @csrf
                    <input type="hidden" name="id" value="{{$slider->id}}">    
                    <input type="hidden" name="old_image" value="{{$slider->slider_img}}">    
               
                    <div class="form-group">
                        <h5>Slide Title  <span class="text-danger">*</span></h5>
                        <div class="controls">
                     <input type="text" name="title" class="form-control" value="{{$slider->title}}" > </div>
                    </div>
                
                    @error('title')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                
                    <div class="form-group">
                        <h5>Slider Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                     <input type="text"  name="description" class="form-control" value="{{$slider->description}}" > </div>
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
                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
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