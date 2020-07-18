@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="container-fluid m-0 overflow-hidden contenarone ">
  <div class="row ">
     <div class="col-md-12">
      <div class="callbacks_container">
        <div class="slider-wrapper">
          <div class="">
            <div class="slider-item">
              <img class="banner-image" src="{{URL::asset('image/MenBanner.jpg')}}">
            </div>
          </div>
          <div class="">
            <div class="slider-item">
              <img class="banner-image" src="{{URL::asset('image/WomenBanner.jpg')}}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid p-5 contenartwo">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0">
        <div class="card-body">

          <div class="row">
            <div class="col-md-8">
              <h4>Featured Products</h4>
            </div>

            <div class="col-md-4">
              <div class="w-100">
                <a type="button" class="btn btn-sm btn-outline-secondary float-right" href="{{url('/product/10')}}">View All</a>
              </div>
            </div>
          </div>

           <hr>
          <div class="row">
            <?php 
              $count = 0;
            ?>
            @foreach ($results->data as $user)
            <?php
                $count++
            ?>
            <div class="col-md-3 col-sm-6">
              <a href="#">
                <div class="card" style="width: 18rem; height: 30rem">
                  <div class="hovereffect">
                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" width="250" height="300">
                    <div class="overlay">
                       <h2>{{$user->name}}</h2>
                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">৳{{ floor(($user->price/100)*25) }}</p>
                        <!-- <p class="line-through">৳{{ $user->price }}</p> -->
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer d-flex justify-content-end">
                    <form  action="{{route('cart.add')}}" method="post">
                      {{csrf_field()}}
                      <div class="quantity">
                        <input  type="hidden" name="qty" value="1">
                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
                      </div>
                      <button class="btn text-primary pl-4 pr-4 m-0">
                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      </button>
                    </form> 
                  </div>
                </div>
              </a>
            </div>
            @if ($count == 4)
                @break
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid p-5 contenartwo">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0">
        <div class="card-body">

          <div class="row">
            <div class="col-md-8">
              <h4>New Arivel</h4>
            </div>

            <div class="col-md-4">
              <div class="w-100">
                <a type="button" class="btn btn-sm btn-outline-secondary float-right" href="{{'/products'}}">View All</a>
              </div>
            </div>
          </div>

           <hr>
          <div class="row">
            <?php 
              $count = 0;
            ?>
            @foreach ($results->data as $user)
            <?php
                $count++
            ?>
            <div class="col-md-3 col-sm-6">
              <a href="#">
                <div class="card" style="width: 18rem; height: 30rem">
                  <div class="hovereffect">
                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" width="250" height="300">
                    <div class="overlay">
                       <h2>{{$user->name}}</h2>
                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">৳{{ $user->price }}</p>
                        <!-- <p class="line-through">৳{{ $user->price }}</p> -->
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer d-flex justify-content-end">
                    <form  action="{{route('cart.add')}}" method="post">
                      {{csrf_field()}}
                      <div class="quantity">
                        <input  type="hidden" name="qty" value="1">
                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
                      </div>
                      <button class="btn text-primary pl-4 pr-4 m-0">
                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      </button>
                    </form> 
                  </div>
                </div>
              </a>
            </div>
            @if ($count == 4)
                @break
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid p-5 contenartwo">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0">
        <div class="card-body">

          <div class="row">
            <div class="col-md-8">
              <h4>Recommended For You</h4>
            </div>

            <div class="col-md-4">
              <div class="w-100">
                <a type="button" class="btn btn-sm btn-outline-secondary float-right" href="{{'/products'}}">View All</a>
              </div>
            </div>
          </div>

           <hr>
          <div class="row">
            <?php 
              $count = 0;
            ?>
            @foreach ($results->data as $user)
            <?php
                $count++
            ?>
            <div class="col-md-3 col-sm-6">
              <a href="#">
                <div class="card" style="width: 18rem; height: 30rem">
                  <div class="hovereffect">
                    <img class="card-img-top w-100 img-responsiv" src="{{$user->image}}" width="250" height="300">
                    <div class="overlay">
                       <h2>{{$user->name}}</h2>
                       <a class="info" href="{{'/description/'.$user->id}}">QUICK VIEW</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title text-secondary">{{$user->name}}</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">৳{{ $user->price }}</p>
                        <!-- <p class="line-through">৳{{ $user->price }}</p> -->
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer d-flex justify-content-end">
                    <form  action="{{route('cart.add')}}" method="post">
                      {{csrf_field()}}
                      <div class="quantity">
                        <input  type="hidden" name="qty" value="1">
                        <input type="hidden" name="pdtId" value="{{ $user->id }}">
                        <input  type="hidden" name="pdtName" value="{{$user->name}}">
                        <input type="hidden" name="pdtPrice" value="{{ $user->price }}">
                      </div>
                      <button class="btn text-primary pl-4 pr-4 m-0">
                          <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      </button>
                    </form> 
                  </div>
                </div>
              </a>
            </div>
            @if ($count == 4)
                @break
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('/userInterface/layout/footer')