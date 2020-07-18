@include('/userprofile/partials/header')
@include('/userprofile/partials/nav')
@include('/userprofile/partials/sidebar')

<div id="layoutSidenav_content">
    <div class="container-fluid p-3 overflow-hidden contenartwo" id="profileshow">
      <div class="row">
        <div class="col-md-12 col-xm-12 pl-5 pr-5 pt-2 pb-2">
          <div class="card border-0">
            
            <div class="card-body text-secondary justify-content-center p-5">
              <div class="row">
                <h5 class="pl-2">Name: </h5>
                <h5 class="pl-2">{{$user->data->name}}</h5>
              </div>
              <div class="row">
                <h5 class="pl-2">Phone Number: </h5>
                <h5 class="pl-2">{{$user->data->phone}}</h5>
              </div>
              <div class="row">
                <h5 class="pl-2">Email: </h5>
                <h5 class="pl-2">{{$user->data->email}}</h5>
              </div>
              <!-- <div class="row">
                <h5 class="pl-2">Address: </h5>
                <h5 class="pl-2">1205, Dhaka, Bangladesh</h5>
              </div> -->
              <hr>
              <!-- <div class="row">
                <button id="profilebtn" type="button" class="btn btn-primary btn-sm ml-2">Update Profile</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-3 overflow-hidden contenartwo" id="Updatefile">
      <div class="row">
        <div class="col-md-12 col-xm-12 pl-5 pr-5 pt-2 pb-2">
          <div class="card border-0">
            <div class="card-body text-secondary justify-content-center p-5">
              <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{$user->data->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+880 15XX-XXXXXX" value="{{$user->data->phone}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" value="{{$user->data->email}}">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
            </div> -->
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-3 overflow-hidden contenartwo" id="ordertable">
      <div class="row">
        <div class="col-md-12 col-xm-12 pl-5 pr-5 pt-2 pb-2">
          <div class="card border-0">
            <div class="card-body justify-content-center">
                <table class="table table-hover text-secondary">
              <thead>
                  <tr>
                    <th>Order Id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <!-- <th>Action</th> -->
                  </tr>
              </thead>
              <tbody>
                @foreach ($order->orders as $order)
                @if($order->user_id == $_COOKIE['user'])
                  <tr>
                     <td>{{$order->id}}</td>
                     <td>{{$order->name}}</td>
                     <td>{{$order->email}}</td>
                     <td>{{$order->phone}}</td>
                     <td>{{$order->address}}</td>
                     <!-- <td class="font-weight-bold"><a href="{{url('/admin/orderdetails/' . $order->id)}}">Details</a></td> -->
                 </tr>
                       @endif
                 @endforeach
                  <!-- <tr>
                      <td>1</td>
                      <td>Clark</td>
                      <td>C-130</td>
                      <td>100 Tk</td>
                      <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
                  </tr> -->        
              </tbody>
          </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('/userprofile/partials/future')

<script>
    $(document).ready(function(){

        $("#Updatefile").hide();
        $("#ordertable").hide();
        
        $("#profilebtn").click(function(){
            $("#profileshow").show();
            $("#ordertable").hide();
            $("#Updatefile").hide();
        });

        $("#profileupdatebtn").click(function(){
            $("#profileshow").hide();
            $("#ordertable").hide();
            $("#Updatefile").show();
        });

        $("#orderbtn").click(function(){
            $("#profileshow").hide();
            $("#ordertable").show();
            $("#Updatefile").hide();
        });
    });
</script>