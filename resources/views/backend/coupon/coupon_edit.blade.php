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
                 <h3 class="box-title">Edit Coupon</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                    <form method="post" action="{{ route('coupon.update', $coupon->id) }}" enctype="multipart/form-data" >
                        @csrf
                    
                    <div class="form-group">
                       <h5>Coupon Name  <span class="text-danger">*</span></h5>
                       <div class="controls">
                    <input type="text" name="coupon_name" value="{{ $coupon->coupon_name }}" class="form-control" > </div>
                   </div>
               
                   @error('coupon_name')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
               
                   <div class="form-group">
                    <h5>Coupon discount (%)  <span class="text-danger">*</span></h5>
                    <div class="controls">
                    <input type="text"  name="coupon_discount" class="form-control"  value="{{ $coupon->coupon_discount }}" > </div>
                    </div>
                
                    @error('coupon_discount')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    
                    <div class="form-group">
                        <h5>Coupon Validity  <span class="text-danger">*</span></h5>
                        <div class="controls">
                     <input type="date"  name="coupon_validity" class="form-control" min="{{Carbon\Carbon::now()->format('Y-m-d')}}"  value="{{$coupon->coupon_validity}}" > </div>
                    </div>
                
                    @error('coupon_validity')
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