@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')


            <div class="col-md-2">
                
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Change Password</span><strong>
                        </strong></h3>

                    <div class="card-body">

                        <form method="post" action="{{ route('user.password.update') }}" enctype="multipart/form-data">
                            @csrf
              
              
                       <div class="form-group">
                          <label class="info-title" for="exampleInputEmail1">Current password <span> </span></label>
                          <input type="text" name="oldpassword" class="form-control" value="">
                      </div>
              
                      <div class="form-group">
                          <label class="info-title" for="exampleInputEmail1">New Password <span> </span></label>
                          <input type="password" name="password" id="password" class="form-control" value="">
                      </div>
              
              
                      <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Confirm Password <span> </span></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="">
                        </div>
                       
                       <div class="form-group">            
                         <button type="submit" class="btn btn-danger">Update</button>
                      </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection