@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>

        <div class="card" id="inputfild">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
            <div class="card-body">
                
                <form action="/productupdate" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$results->data->id}}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Product Name: </label>
                        
                            <input type="text" name="brand" class="form-control" placeholder="Product Name" value="{{$results->data->name}}">
                        </div>
                        <div class="form-group col-md-3">
                            {{csrf_field()}}
                          <label for="exampleFormControlSelect1">Gender</label>

                            <select name="gender" class="form-control" id="exampleFormControlSelect1" value="{{$results->data->name}}">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                                      
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            {{csrf_field()}}
                          <label for="exampleFormControlSelect1">Cuntom</label>

                            <select name="custom" class="form-control" id="exampleFormControlSelect1" value="{{$results->data->name}}">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                                      
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{csrf_field()}}
                            <label for="exampleFormControlSelect1">Product Type</label>

                            <select name="product_type" class="form-control" value="{{$results->data->name}}">
                                <option value="1">T-Shirts</option>
                                <option value="2">Shirts</option>
                                <option value="3">Panjabi</option>
                                <option value="4">Plo Shirts</option>
                                <option value="5">Jeans</option>
                                <option value="6">Pant</option>
                                <option value="7">Traditional Clothing</option>
                                <option value="8">Saree</option>
                                <option value="9">Shalwar Kameez</option>
                                <option value="10">Kurtis</option>
                                <option value="11">Chothing</option>
                                <option value="12">Women Bags</option>                                                      
                            </select>
                            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlInput1">Price: </label>
                            {{csrf_field()}}
                            <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price" value="{{$results->data->price}}">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleFormControlTextarea1">Discount %</label>
                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea> -->
                            {{csrf_field()}}
                            <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount" value="{{$results->data->discount}}">
                        </div>
                        
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Number: </label>
                            {{csrf_field()}}
                            <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="number" value="{{$results->data->number}}">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Product Color: </label>
                            {{csrf_field()}}
                            <input type="text" name="color" class="form-control" id="exampleFormControlInput1" placeholder="Product Color" value="{{$results->data->color}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleFormControlInput1">Size: </label>
                            {{csrf_field()}}
                            <input type="text" name="size" class="form-control" id="exampleFormControlInput1" placeholder="size.." value="{{$results->data->size}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlInput1">Description: </label>
                            {{csrf_field()}}
                            <input name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$results->data->description}}"></input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <img src="{{$results->data->image}}" height=150 width=150>
                        </div>
                        
                        <!-- <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image : </label>
                            <input type="file" name="image" id="image" class="form-control">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                        </div> -->
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>

    </div>
</main>

@include('/admin/partials/future')
