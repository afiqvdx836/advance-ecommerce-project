@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              
          </div>
      </div>	  

      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Add Product</h4>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">	
                        
                        <div class="row"><!-- start first row -->

                            <div class="col-md-4"><!-- start col-md-4 -->

                                <div class="form-group">
                                    <h5>Brands List <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                       
                                            <select name="category_id"  class="form-control" aria-invalid="false">
                                                <option value="" selected="" disabled="">Select Your Brand</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{$brand->id}}" >{{ $brand->brand_name_en}}</option>
                                                @endforeach
                                            </select>
                                       
                                       
                                    <div class="help-block"></div></div>
        
                                    @error('category_id')
                                    <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
        

                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                <div class="form-group">
                                    <h5>Sub SubCategory Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                       
                                            <select name="subsubcategory_id"  class="form-control" aria-invalid="false">
                                                <option value="" selected="" disabled="">Select Your Category</option>
                                                
                                            </select>
                                       
                                       
                                    <div class="help-block"></div></div>
        
                                    @error('subsubcategory_id')
                                    <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
        
                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                <div class="form-group">
                                    <h5>SubCategory List <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                       
                                            <select name="subcategory_id"  class="form-control" aria-invalid="false">
                                                <option value="" selected="" disabled="">Select Your Category</option>
                                                
                                            </select>
                                       
                                       
                                    <div class="help-block"></div></div>
        
                                    @error('subcategory_id')
                                    <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
        
                            </div><!-- end-cold-md-4 -->

                        </div><!-- end first row -->



                        <div class="row"><!-- start 2nd row -->

                            <div class="col-md-4"><!-- start col-md-4 -->

                                <div class="form-group">
                                    <h5>Sub SubCategory Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                       
                                            <select name="category_id"  class="form-control" aria-invalid="false">
                                                <option value="" selected="" disabled="">Select Your Brand</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{$brand->id}}" >{{ $brand->brand_name_en}}</option>
                                                @endforeach
                                            </select>
                                       
                                       
                                    <div class="help-block"></div></div>
        
                                    @error('category_id')
                                    <span class="text-danger">{{$message}}</span>
                                   @enderror
                                </div>
        

                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                <div class="form-group">
                                    <h5>Product Name English  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                 <input type="text" name="product_name_en" class="form-control" > </div>
                                </div>
                            
                                @error('product_name_en')
                                 <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                <div class="form-group">
                                    <h5>Product Name Hin  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                 <input type="text" name="product_name_hin" class="form-control" > </div>
                                </div>
                            
                                @error('product_name_hin')
                                 <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div><!-- end-cold-md-4 -->

                        </div><!-- end 2nd row -->

                        <div class="row"><!-- start 3rd row -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                    <div class="form-group">
                                        <h5>Product Code<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                     <input type="text" name="product_code" class="form-control" > </div>
                                    </div>
                                
                                    @error('product_code')
                                     <span class="text-danger">{{$message}}</span>
                                    @enderror  

                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4"><!-- start col-md-4 -->
                                <div class="form-group">
                                    <h5>Product Quantity  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                 <input type="text" name="product_qty" class="form-control" > </div>
                                </div>
                            
                                @error('product_qty')
                                 <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div><!-- end-cold-md-4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5>Product Tags En <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="product_tags_en" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput">
                                
                                @error('product_tags_en') 
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
               
                           </div> <!-- end col md 4 -->

                           

                        </div><!-- end 3rd row -->

                        <div class="row"> <!-- start 4th row  -->
                            <div class="col-md-4">
                
                        <div class="form-group">
                            <h5>Product Tags Hin <span class="text-danger">*</span></h5>
                            <div class="controls">
                     <input type="text" name="product_tags_hin" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput">
                     @error('product_tags_hin') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                            <div class="col-md-4">
                
                                 <div class="form-group">
                            <h5>Product Size En <span class="text-danger">*</span></h5>
                            <div class="controls">
                     <input type="text" name="product_size_en" class="form-control" value="Small,Midium,Large" data-role="tagsinput">
                     @error('product_size_en') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                
                            <div class="col-md-4">
                
                                 <div class="form-group">
                            <h5>Product Size Hin <span class="text-danger">*</span></h5>
                            <div class="controls">
                     <input type="text" name="product_size_hin" class="form-control" value="Small,Midium,Large" data-role="tagsinput">
                     @error('product_size_hin') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                        </div> <!-- end 4th row  -->


                        <div class="row"> <!-- start 5th row  -->
                            <div class="col-md-4">
                
                        <div class="form-group">
                            <h5>Product Color  English<span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="text" name="product_color_en" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput">
                            @error('product_color_en') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                            <div class="col-md-4">
                
                                 <div class="form-group">
                            <h5>Product Color Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="text" name="product_color_hin" class="form-control" value="Small,Midium,Large" data-role="tagsinput">
                            @error('product_color_hin') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                
                            <div class="col-md-4">
                
                                 <div class="form-group">
                            <h5>Product Size Hin <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="selling_price" class="form-control">
                            @error('selling_price') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                        </div> <!-- end 5th row  -->


                    
                        <div class="row"> <!-- start 6th row  -->
                            <div class="col-md-4">
                
                        <div class="form-group">
                            <h5>Product Discount Price<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="discount_price" class="form-control" >
                            @error('discount_price') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                            <div class="col-md-4">
                
                                 <div class="form-group">
                            <h5>Main Thambnail <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="file" name="product_thambnail" class="form-control" >
                            @error('product_thambnail') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                              </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                
                            <div class="col-md-4">
                                <div class="form-group">
                                <h5>Multiple Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="" >
                                @error('multi_img') 
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                        </div> <!-- end 6th row  -->



                        <div class="row"> <!-- start 7th row  -->
                            <div class="col-md-6">
                
                        <div class="form-group">
                            <h5>Short Description English <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                            </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                            <div class="col-md-6">
                
                                 <div class="form-group">
                            <h5>Short Description Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="short_descp_hin" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>     
                            </div>
                        </div>
                
                            </div> <!-- end col md 4 -->
                
                        </div> <!-- end 7th row  -->


              
                    <div class="row"> <!-- start 7th row  -->
                        <div class="col-md-6">

                    <div class="form-group">
                        <h5>Short Description English <span class="text-danger">*</span></h5>
                        <div class="controls">
                    <textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>     
                        </div>
                    </div>
                            
                        </div> <!-- end col md 6 -->

                        <div class="col-md-6">

                    <div class="form-group">
                        <h5>Short Description Hindi <span class="text-danger">*</span></h5>
                        <div class="controls">
                    <textarea name="short_descp_hin" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>     
                        </div>
                    </div>
                            
                            
                        </div> <!-- end col md 6 -->		 
                        
                    </div> <!-- end 7th row  -->

                    <div class="row"> <!-- start 8th row  -->
                        <div class="col-md-6">
            
                    <div class="form-group">
                        <h5>Long Description English <span class="text-danger">*</span></h5>
                        <div class="controls">
                <textarea id="editor1" name="long_descp_en" rows="10" cols="80" required="">
                    Long Description English
                                    </textarea>  
                          </div>
                    </div>
                            
                        </div> <!-- end col md 6 -->
            
                        <div class="col-md-6">
            
                     <div class="form-group">
                        <h5>Long Description Hindi <span class="text-danger">*</span></h5>
                        <div class="controls">
                <textarea id="editor2" name="long_descp_hin" rows="10" cols="80">
                    Long Description Hindi
                                    </textarea>       
                          </div>
                    </div>
                             
                            
                        </div> <!-- end col md 6 -->		 
                        
                    </div> <!-- end 8th row  -->

                        
                      </div>
                    </div>
                      
                    <hr>
 


                    <div class="row">
                
                <div class="col-md-6">
                            <div class="form-group">
                             
                        <div class="controls">
                            <fieldset>
                                <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                                <label for="checkbox_2">Hot Deals</label>
                            </fieldset>
                            <fieldset>
                                <input type="checkbox" id="checkbox_3" name="featured" value="1">
                                <label for="checkbox_3">Featured</label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-6">
                    <div class="form-group">
                         
                        <div class="controls">
                            <fieldset>
                                <input type="checkbox" id="checkbox_4" name="special_offer" value="1">
                                <label for="checkbox_4">Special Offer</label>
                            </fieldset>
                            <fieldset>
                                <input type="checkbox" id="checkbox_5" name="special_deals" value="1">
                                <label for="checkbox_5">Special Deals</label>
                            </fieldset>
                        </div>
                            </div>
                        </div>
                         </div>
                      <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">		
                      </div>
                  </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>

@endsection