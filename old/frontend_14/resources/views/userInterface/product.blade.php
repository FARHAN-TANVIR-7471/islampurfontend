@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="">
	<div class="container-fluid p-5 contenartwo">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="card border-0">
	        <div class="card-body">
	          <hr>
	          <div class="row">
	          	@foreach ($results->data as $user)
	            @if($user->product_type_id == $data)
	            <div class="col-md-3 col-sm-6 p-2">
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
	      </div>
	    </div>
	  </div>
	</div>
</div>
@include('/userInterface/layout/footer')