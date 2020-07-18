@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<script type="text/javascript">
    function myFunction()
    {
        window.print();
    }
</script>

<div id="layoutSidenav_content">
    <ol class="breadcrumb mb-4">
        <input style="padding:5px;" value="Print Order" type="button" onclick="myFunction()" class="hidden-print btn btn-info font-weight-bold"></input>
        <a href="/admin/order" class="btn btn-warning pl-3 pr-3 ml-3 font-weight-bold text-white hidden-print">Go Order List</a>
    </ol>
@foreach ($results->orders as $order)
<div class="container">
    @if($order->id == $order_id)
        <p><samp class="font-weight-bold mr-2">Order ID:</samp>{{$order->id}}</p>
        <p><samp class="font-weight-bold mr-2">Name:</samp>{{$order->name}}</p>
        <p><samp class="font-weight-bold mr-2">Email:</samp>{{$order->email}}</p>
        <p><samp class="font-weight-bold mr-2">Phone:</samp>{{$order->phone}}</p>
        <p><samp class="font-weight-bold mr-2">Address:</samp>{{$order->address}}</p>

        <div class="container pb-2">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>product_id</th>
                        <th>order_id</th>
                        <th>product_quantity</th>
                        <th>total_amount</th>
                      </tr>
                    </thead>
                     
                    <tbody>
                        <?php
                            $sl = 1;
                        ?>
                        @foreach($order->orderitems as $order)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{$order->product_id}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->product_quantity}}</td>
                                <td>{{$order->total_amount}}</td>
                            </tr>

                        @endforeach
                        <hr>

                        <tr>
                            <td colspan="3"> </td>
                            <td> Total Amount: </td>
                            <td> 200</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
        <div class="mt-5 mb-5 ml-3">
            <p class="pt-5">signature</p>
        </div>
        <!-- <input style="padding:5px;" value="Print Order" type="button" onclick="myFunction()" class="hidden-print btn btn-info font-weight-bold"></input>
        <a href="/admin/order" class="btn btn-warning pl-3 pr-3 font-weight-bold text-white hidden-print">Go Order List</a> -->
    @endif
</div>

@endforeach

@include('/admin/partials/future')
