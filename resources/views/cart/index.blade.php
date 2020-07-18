@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="container mb-5">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th>Delete</th>
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
                            <td>
                                <form action="{{route('cart.update', $cart->id)}}" method="post" style="display: inline;">
                                    @csrf
                                    {{-- @method('patch') --}}
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="product_quantity" value="{{ $cart->product_quantity }}" step="0.25">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-warning" >Update</button>
                                        </div>
                                    </div>    
                                </form>
                            </td>
                            <td>{{ floor($cart->product_quantity * ($cart->product->price - ($cart->product->price/100 * $cart->product->discount))) }}</td>
                            <td>
                                <form action="{{route('cart.destroy', $cart->id)}}" onclick="return confirm('Are you sure, you want to delete this Item?')" method="post" style="display: inline;">
                                    @csrf
                                    {{-- @method('delete') --}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"> </td>
                        <td> Total Amount: </td>
                        <td> {{$carts->total}} </td>
                    </tr> 
                </tbody>
          </table>

          <div class="float-right">
            <a href="/" class="btn btn-success">Continue Shopping</a>
            <a href="{{route('checkout.index')}}" class="btn btn-warning">Checkout</a>
          </div>
    </div>        
</div>
    
@include('/userInterface/layout/footer')