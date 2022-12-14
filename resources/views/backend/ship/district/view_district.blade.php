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
                <h3 class="box-title">Division List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>Division Name </th>
                            <th>District Name </th>
                            <th>Action</th>
                            
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($district as $item)
                          <tr>
                                <td>{{ $item->division->division_name}}</td>
                                <td>{{ $item->district_name }}</td>
                                
                                <td width="40%">
                                  <a href="{{ route('district.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil" title="Edit Data"></i></a>
                                  <a href="{{ route('district.delete', $item->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash" title="Delete Data"></i></a>
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
                 <h3 class="box-title">Add District</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                    <form method="post" action="{{ route('district.store') }}" enctype="multipart/form-data" >
                        @csrf
               
               
                    <div class="form-group">
                       <h5>Division Select  <span class="text-danger">*</span></h5>
                       <div class="controls">
                        <select name="division_id" class="form-control">
                            @foreach ($division as $div )
                                <option value="{{$div->id}}">{{$div->division_name}}</option>
                            @endforeach

                        </select>
                        </div>
                   </div>
               
                   @error('division_id')
                    <span class="text-danger">{{$message}}</span>
                   @enderror

                   <div class="form-group">
                    <h5>District Name  <span class="text-danger">*</span></h5>
                    <div class="controls">
                 <input type="text"  name="district_name" class="form-control" > </div>
                </div>
            
                @error('district_name')
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