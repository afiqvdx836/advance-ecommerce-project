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
                 <h3 class="box-title">Edit SubCategory</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">   
                    <form method="post" action="{{ route('subcategory.update', $subcategory->id) }}" enctype="multipart/form-data" >
                        @csrf
                    <input type="hidden" name="id" value="{{$subcategory->id}}">
                        <div class="controls">
                            <h5>Category List</h5>
                            <select name="category_id"  class="form-control" aria-invalid="false">
                                <option value="" selected="" disabled="">Select Your Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{ $category->id == $subcategory->category_id ? "selected" : '' }} >
                                        {{ $category->category_name_en}}</option>
                                @endforeach
                            </select>
                       
                       
                    <div class="help-block"></div></div>

                    @error('category_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                    <div class="form-group">
                       <h5>SubCategory Name English  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text" id="category_name_en" name="subcategory_name_en" value="{{ $subcategory->subcategory_name_en }}" class="form-control" > </div>
                   </div>
               
                   @error('subcategory_name_en')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
               
                   <div class="form-group">
                       <h5>SubCategory Name Hindi  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text" id="category_name_hin"  name="subcategory_name_hin" value="{{ $subcategory->subcategory_name_hin }}" class="form-control"  > </div>
                   </div>
               
                   @error('subcategory_name_hin')
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