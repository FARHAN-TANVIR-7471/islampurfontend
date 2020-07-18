@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            
            <div class="breadcrumb mb-4 col-md-12 mt-3">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Product</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Product</button>
            </div>
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Coler</th>
                                    
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Color</th>
                                    
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach ($results->data as $user)
                                
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    
                                    <td>{{ $user->product_type_id }}</td>
                                    <td>{{ $user->price }}</td>
                                    <td>{{ $user->discount }}%</td>
                                    <td>{{ $user->color }}</td>
                                   
                                    <td>{{ $user->trend }}</td>
                                    <td>
                                        <img style="width: 30%; height:15%" src="{{ $user->image }}">
                                    </td>
                                    <td class="text-center">
                                        <!-- <a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a> -->
                                        <a href="{{'/admin/productupdate/' . $user->id}}" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>                                    
                                    </td>
                                </tr>
                                @endforeach                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="inputfild">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
                <div class="card-body">
                    
                    <form action="/productinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Product Brand: </label>
                                <input type="text" name="brand" class="form-control" placeholder="Product Name">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Store: </label>
                                {{csrf_field()}}
                                <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="number">
                            </div>

                            <div class="form-group col-md-4">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Product Type</label>

                                <select name="product_type_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Print</option>
                                    <option value="2">YardFabtics</option>
                                    <option value="3">3 Pieces</option>
                                    <option value="4">Lungi</option>
                                    <option value="5">Sale</option>             
                                </select>
                            </div>
                            <!-- <div class="form-group col-md-3">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Gender</label>

                                <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>                  
                                </select>
                            </div> -->

                            <!-- <div class="form-group col-md-3">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Cuntom</label>

                                <select name="custom" class="form-control" id="exampleFormControlSelect1">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                                          
                                </select>
                            </div> -->
                        </div>

                        <div class="form-row">
                            <!-- <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Size: </label>
                                {{csrf_field()}}
                                <input type="text" name="size" class="form-control" id="exampleFormControlInput1" placeholder="size..">
                            </div> -->

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Discount</label>
                                {{csrf_field()}}
                                <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount in %">
                            </div>
                        </div>

                        <hr>

                        <!-- <div class="form-row">
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type</label>
                                <input type="text" name="product_type" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type 2</label>

                                <input type="text" name="product_typetwo" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">
                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price 2 </label>
                                {{csrf_field()}}
                                <input type="text" name="pricetwo" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type 3</label>
                                <input type="text" name="product_typethree" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price 3</label>
                                {{csrf_field()}}
                                <input type="text" name="pricethree" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type 4</label>

                                <input type="text" name="product_typefour" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">
                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price 4</label>
                                {{csrf_field()}}
                                <input type="text" name="pricefour" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type 5</label>
                                <input type="text" name="product_typefive" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price 5 </label>
                                {{csrf_field()}}
                                <input type="text" name="pricefive" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type 6</label>

                                <input type="text" name="product_typesex" class="form-control" id="exampleFormControlInput1" placeholder="Product Type">
                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price 6 </label>
                                {{csrf_field()}}
                                <input type="text" name="pricesex" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            
                        </div> -->

                        <hr>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="color" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 2</label>
                                {{csrf_field()}}
                                <input type="text" name="colortwo" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="imagetwo" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 3 </label>
                                {{csrf_field()}}
                                <input type="text" name="colorthree" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 3 </label>
                                <input type="file" name="imagethree" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 4</label>
                                {{csrf_field()}}
                                <input type="text" name="colorfour" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 4 </label>
                                <input type="file" name="imagefour" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 5 </label>
                                {{csrf_field()}}
                                <input type="text" name="colorfive" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 5 </label>
                                <input type="file" name="imagefive" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 6 </label>
                                {{csrf_field()}}
                                <input type="text" name="colorsix" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 6 </label>
                                <input type="file" name="imagesix" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 7 </label>
                                {{csrf_field()}}
                                <input type="text" name="colorseven" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 7 </label>
                                <input type="file" name="imageseven" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 8 </label>
                                {{csrf_field()}}
                                <input type="text" name="coloreight" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 8 </label>
                                <input type="file" name="imageeight" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 9 </label>
                                {{csrf_field()}}
                                <input type="text" name="colornine" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 9 </label>
                                <input type="file" name="imagenine" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 10 </label>
                                {{csrf_field()}}
                                <input type="text" name="colorten" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image 10 </label>
                                <input type="file" name="imageten" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Description: </label>
                                {{csrf_field()}}
                                <!-- <input type="text" name="season" class="form-control" id="exampleFormControlInput1" placeholder="Season"> -->
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div>
    </main>



@include('/admin/partials/future')

<script>
    $(document).ready(function(){

        $("#showbtn").hide();
        $("#inputfild").hide();

         $("#addbtn").click(function(){
            $("#addbtn").hide();
            $("#datatable").hide();
            $("#showbtn").show();
            $("#inputfild").show();
        });

        $("#showbtn").click(function(){
            $("#addbtn").show();
            $("#datatable").show();
            $("#showbtn").hide();
            $("#inputfild").hide();
        });
    });



    //Console logging (html)
    if (!window.console)
        console = {};

        var console_out = document.getElementById('console_out');
        var output_format = "jpg";


        var encodeButton = document.getElementById('jpeg_encode_button');
        var encodeQuality = document.getElementById('jpeg_encode_quality');


        function compressFile(loadedData, preview) { 
          console.log('width: ' + loadedData.width + ' height: ' + loadedData.height);

          var result_image = document.getElementById('image');
          var quality = parseInt(encodeQuality.value);
          console.log("Quality >>" + quality);

          console.log("process start...");
          var time_start = new Date().getTime();

          var mime_type = "image/jpeg";
          if (typeof output_format !== "undefined" && output_format == "png") {
            mime_type = "image/png";
        }

          var cvs = document.createElement('canvas');
          cvs.width = loadedData.width;
          cvs.height = loadedData.height;
          var ctx = cvs.getContext("2d").drawImage(loadedData, 0, 0);
          var newImageData = cvs.toDataURL(mime_type, quality / 100);
          var result_image_obj = new Image();
          result_image_obj.src = newImageData;
          result_image.src = result_image_obj.src;

          result_image.onload = function() {}
          var duration = new Date().getTime() - time_start;

          console.log("process finished...");
          console.log('Processed in: ' + duration + 'ms');
    }
</script>