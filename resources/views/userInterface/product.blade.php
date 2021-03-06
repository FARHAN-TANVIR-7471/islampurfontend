@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="">
	<div class="container-fluid p-5 contenartwo">
	  <div class="row">
	  	<div class="col-md-2" >
	  		<div>
	  			<h3 class="d-flex justify-content-center">Categories</h3>

	  			<div class="mt-3">
	  				<button id="allbtn" type="button" class="btn btn-outline-info btn-sm btn-block border-top-0 border-right-0 border-left-0">All Product</button>
	  			</div>
	  		</div>

	  		<div class="mt-5">
	  			<h5 class="d-flex justify-content-center">Discount</h5>

	  			<div class="mt-3">
	  				<button id="discountBtnOne" type="button" class="btn btn-outline-info btn-sm btn-block border-top-0 border-right-0 border-left-0">0% - 5%</button>
	  			</div>
	  			<div class="mt-3">
	  				<button id="discountBtnTwo" type="button" class="btn btn-outline-info btn-sm btn-block border-top-0 border-right-0 border-left-0">5% - 10%</button>
	  			</div>
	  			<div class="mt-3">
	  				<button id="discountBtnThree" type="button" class="btn btn-outline-info btn-sm btn-block border-top-0 border-right-0 border-left-0">10% - 15%</button>
	  			</div>
	  		</div>
	  	</div>
	    <div class="col-md-10">
	      <div class="card border-0">
	        <div class="card-body" id="allProduct">
	        	<h5>All Product</h5>
	          <hr>
	          <div class="row">
	          	@foreach ($results->data as $user)
	            @if($user->product_type_id == $data)
	            <div class="col-md-3 col-sm-6 m-3">
	              <a href="#">
	                <div class="card" style="width: 18rem;">
	                  <div class="hovereffect">
	                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" alt="">
	                    <div class="overlay">
	                       <h2>{{$user->name}}</h2>
	                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
	                    </div>
	                  </div>

	                  <div class="card-body">
	                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
	                    <div class="card-text d-flex justify-content-between">
	                    	<p class="text-dark font-weight-bold">৳{{ $user->price }}</p>              
	                    </div>
	                  </div>
	                  <!-- card footer -->
	                  <div class="card-footer d-flex justify-content-end">
	                    <form action="#" method="post">
	                      {{csrf_field()}}
	                      <div class="quantity">
	                        <input  type="hidden" name="qty" value="1">
	                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
	                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
	                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
	                      </div>
	                      <button type="submit" class="btn text-primary pl-4 pr-4 m-0">
	                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                      </button>
	                    </form> 
	                  </div>
	                </div>
	              </a>
	            </div>
	            @endif
	            @endforeach
	          </div>
	        </div>

	        <div class="card-body" id="discountOne">
	        	<h5>Discount 0% - 5%</h5>
	          <hr>
	          <div class="row">
	          	@foreach ($results->data as $user)
	            @if($user->product_type_id == $data)
	            @if($user->discount > 0 && $user->discount <= 5)
	            <div class="col-md-3 col-sm-6 m-3">
	              <a href="#">
	                <div class="card" style="width: 18rem;">
	                  <div class="hovereffect">
	                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" alt="">
	                    <div class="overlay">
	                       <h2>{{$user->name}}</h2>
	                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
	                    </div>
	                  </div>

	                  <div class="card-body">
	                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
	                    <div class="card-text d-flex justify-content-between">
	                    	<p class="text-dark font-weight-bold">৳{{ $user->price }}</p>              
	                    </div>
	                  </div>
	                  <!-- card footer -->
	                  <div class="card-footer d-flex justify-content-end">
	                    <form action="#" method="post">
	                      {{csrf_field()}}
	                      <div class="quantity">
	                        <input  type="hidden" name="qty" value="1">
	                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
	                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
	                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
	                      </div>
	                      <button type="submit" class="btn text-primary pl-4 pr-4 m-0">
	                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                      </button>
	                    </form> 
	                  </div>
	                </div>
	              </a>
	            </div>
	            @endif
	            @endif
	            @endforeach
	          </div>
	        </div>

	        <div class="card-body" id="discountTwo">
	        	<h5>Discount 6% - 10%</h5>
	          <hr>
	          <div class="row">
	          	@foreach ($results->data as $user)
	            @if($user->product_type_id == $data)
	            @if($user->discount > 5 && $user->discount <= 10)
	            <div class="col-md-3 col-sm-6 m-3">
	              <a href="#">
	                <div class="card" style="width: 18rem;">
	                  <div class="hovereffect">
	                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" alt="">
	                    <div class="overlay">
	                       <h2>{{$user->name}}</h2>
	                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
	                    </div>
	                  </div>

	                  <div class="card-body">
	                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
	                    <div class="card-text d-flex justify-content-between">
	                    	<p class="text-dark font-weight-bold">৳{{ $user->price }}</p>              
	                    </div>
	                  </div>
	                  <!-- card footer -->
	                  <div class="card-footer d-flex justify-content-end">
	                    <form action="#" method="post">
	                      {{csrf_field()}}
	                      <div class="quantity">
	                        <input  type="hidden" name="qty" value="1">
	                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
	                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
	                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
	                      </div>
	                      <button type="submit" class="btn text-primary pl-4 pr-4 m-0">
	                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                      </button>
	                    </form> 
	                  </div>
	                </div>
	              </a>
	            </div>
	            @endif
	            @endif
	            @endforeach
	          </div>
	        </div>

	        <div class="card-body" id="discountThree">
	        	<h5>Discount 11% - 15%</h5>
	          <hr>
	          <div class="row">
	          	@foreach ($results->data as $user)
	            @if($user->product_type_id == $data)
	            @if($user->discount > 10 && $user->discount <= 15)
	            <div class="col-md-3 col-sm-6 m-3">
	              <a href="#">
	                <div class="card" style="width: 18rem;">
	                  <div class="hovereffect">
	                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" alt="">
	                    <div class="overlay">
	                       <h2>{{$user->name}}</h2>
	                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
	                    </div>
	                  </div>

	                  <div class="card-body">
	                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
	                    <div class="card-text d-flex justify-content-between">
	                    	<p class="text-dark font-weight-bold">৳{{ $user->price }}</p>              
	                    </div>
	                  </div>
	                  <!-- card footer -->
	                  <div class="card-footer d-flex justify-content-end">
	                    <form action="#" method="post">
	                      {{csrf_field()}}
	                      <div class="quantity">
	                        <input  type="hidden" name="qty" value="1">
	                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
	                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
	                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
	                      </div>
	                      <button type="submit" class="btn text-primary pl-4 pr-4 m-0">
	                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                      </button>
	                    </form> 
	                  </div>
	                </div>
	              </a>
	            </div>
	            @endif
	            @endif
	            @endforeach
	          </div>
	        </div>

	      </div>
	    </div>
	  </div>
	</div>
</div>
@include('/userInterface/layout/footer')



<script>
    $(document).ready(function(){
        $("#discountOne").hide();
        $("#discountTwo").hide();
        $("#discountThree").hide();

        $("#allbtn ").click(function(){
       
            $("#allProduct").show();
 
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });


        $("#discountBtnOne").click(function(){
       
            $("#allProduct").hide();
	        $("#discountOne").show();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#discountBtnTwo").click(function(){
       
            $("#allProduct").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").show();
	        $("#discountThree").hide();
        });

        $("#discountBtnThree").click(function(){
       
            $("#allProduct").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").show();
        });
    });
</script>