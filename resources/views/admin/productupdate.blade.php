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
                    <input type="hidden" name="id" value="{{$results->data->id}}">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Product Brand: </label>
                                <input type="text" name="brand" class="form-control" placeholder="Product Name" value="{{$results->data->name}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Store: </label>
                                {{csrf_field()}}
                                <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="number" value="{{$results->data->number}}">
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
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price" value="{{$results->data->price}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlTextarea1">Discount</label>
                                {{csrf_field()}}
                                <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount in %" value="{{$results->data->discount}}">
                            </div>
                        </div>

                        <hr>

                        <hr>

                        <div class="form-row">                            
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="color" class="form-control" id="exampleFormControlInput1" placeholder="Product Color" value="{{$results->data->color}}">
                            </div>

                            <div class="form-group col-md-3" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Product Color 2</label>
                                {{csrf_field()}}
                                <input type="text" name="colortwo" class="form-control" id="exampleFormControlInput1" placeholder="Product Color" value="{{$results->data->color_1}}">
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
                                <input type="text" name="colorthree" class="form-control" id="exampleFormControlInput1" placeholder="Product Color" value="{{$results->data->color_2}}">
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
