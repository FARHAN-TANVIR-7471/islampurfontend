@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<style type="text/css">
    @media print {
        #printbtn {
        display : none;
        }
    }
</style>
<script type="text/javascript">
    function myFunction()
    {
        window.print();
        printWindow.document.getElementById('showTopDetailsContent').style.display='block';
    }
</script>

<div id="layoutSidenav_content">
    <ol class="breadcrumb mb-4 hidden-print" id="printbtn">
        <input style="padding:5px;" value="Print Order" type="button" onclick="myFunction()" class="hidden-print btn btn-info font-weight-bold"></input>
        <a href="/admin/order" class="btn btn-warning pl-3 pr-3 ml-3 font-weight-bold text-white hidden-print">Go Order List</a>
    </ol>

    <div class="card-header p-4 mb-3">
        <img id="logo" src="{{URL::asset('image/logo.jpg')}}">
        <!-- <div class="float-right">
            <h3 class="mb-1 text-danger">Invoice #BBB10234</h3>
        </div> -->
    </div>
@foreach ($results->orders as $order)
<div class="container">
    @if($order->id == $order_id)
        <p class="m-0"><samp class="font-weight-bold mr-2 ">Order ID:</samp>{{$order->id}}</p>
        <p class="m-0"><samp class="font-weight-bold mr-2">Name:</samp>{{$order->name}}</p>
        <p class="m-0"><samp class="font-weight-bold mr-2">Email:</samp>{{$order->email}}</p>
        <p class="m-0"><samp class="font-weight-bold mr-2">Phone:</samp>{{$order->phone}}</p>
        <p class="m-0"><samp class="font-weight-bold mr-2">Address:</samp>{{$order->address}}</p>

        <div class="container pb-2 mt-3">
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
                            $totalprice = 0;
                        ?>

                        @foreach($order->orderitems as $order)
                        <p class="hidden-print d-none">{{ floor($totalprice += $order->total_amount)}}</p>
                        
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
                            <td> {{$totalprice}}</td>
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
