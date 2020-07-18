@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
                <tbody>
                    <?php
                        $sl = 1;
                    ?>
                    @foreach ($carts->carts as $cart)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $cart->product->name }}</td>
                            <td> <img src="{{ $cart->product->image }}" alt="Smiley face" height="42" width="42"></td>
                            <td>{{ $cart->product_quantity }}</td>
                            <td>{{ floor($cart->product_quantity * ($cart->product->price - ($cart->product->price/100 * $cart->product->discount))) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"> </td>
                        <td> Total Amount: </td>
                        <td> {{$carts->total}} </td>
                    </tr> 
                </tbody>
          </table>
    </div> 
    <hr>
    <form class="mb-5" action="{{route('checkout.store')}}"  method="Post">
        @csrf
        <div class="creditly-wrapper wrapper">
            <div class="information-wrapper">
                <div class="first-row form-group">
                    <div class="controls">
                        <label class="control-label">Full name: </label>
                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                    </div>
                    <div class="card_number_grids">
                        <div class="card_number_grid_left">
                            <div class="controls">
                                <label class="control-label">Email:</label>
                                <input class="form-control" name="email" type="text" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                    </div>
                    <div class="card_number_grids">
                        <div class="card_number_grid_left">
                            <div class="controls">
                                <label class="control-label">Mobile number:</label>
                                <input class="form-control" name="phone" type="text" placeholder="Enter Your Mobile number">
                            </div>
                        </div>
                    </div>
                    <div class="controls">
                        <label class="control-label">Address: </label>
                        <textarea class="form-control" name="address"> </textarea>
                    </div>
                       <div class="controls">
                        <label class="control-label">Shipping Address: </label>
                        <textarea class="form-control" name="billing_address"> </textarea>
                    </div>
                </div>
                <a href="/" class="btn btn-success">Continue Shopping</a>
                <button type="submit"  class="btn btn-warning">place order</button>
            </div>
        </div>
    </form>       
</div>
    
@include('/userInterface/layout/footer')