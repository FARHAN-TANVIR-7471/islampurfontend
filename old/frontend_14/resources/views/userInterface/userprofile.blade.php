@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<div class="container-fluid p-3 overflow-hidden contenartwo" id="profileshow">
  <div class="row">
    <div class="col-md-12 col-xm-12 pl-5 pr-5 pt-2 pb-2">
      <div class="card border-0">
        <div class="card-body text-secondary justify-content-center p-5">
          <div class="row">
          	<h5 class="pl-2">Name: </h5>
          	<h5 class="pl-2">Farhan Tanvir</h5>
          </div>
          <div class="row">
          	<h5 class="pl-2">Phone Number: </h5>
          	<h5 class="pl-2">+880 15XX-XXXXXX</h5>
          </div>
          <div class="row">
          	<h5 class="pl-2">Address: </h5>
          	<h5 class="pl-2">1205, Dhaka, Bangladesh</h5>
          </div>
          <hr>
          <div class="row">
          	<button id="profilebtn" type="button" class="btn btn-primary btn-sm ml-2">Update Profile</button>
          </div>
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
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Phone Number</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+880 15XX-XXXXXX">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Address</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
			  </div>
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
			            <th>Row</th>
			            <th>Name</th>
			            <th>Product Code</th>
			            <th>Price</th>
			            <th>Update Order</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>1</td>
			            <td>Clark</td>
			            <td>C-130</td>
			            
			            <td>100 Tk</td>
			            <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
			        </tr>
			        <tr>
			            <td>1</td>
			            <td>Clark</td>
			            <td>C-130</td>
			            
			            <td>100 Tk</td>
			            <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
			        </tr>
			        <tr>
			            <td>1</td>
			            <td>Clark</td>
			            <td>C-130</td>
			            
			            <td>100 Tk</td>
			            <td><button type="button" class="btn btn-primary btn-sm">Edit</button></td>
			        </tr>            
			    </tbody>
			</table>
        </div>
      </div>
    </div>
  </div>
</div>

@include('/userInterface/layout/footer')

<script>
    $(document).ready(function(){

        $("#Updatefile").hide();

        $("#profilebtn").click(function(){
            $("#profileshow").hide();
            $("#ordertable").hide();
            $("#Updatefile").show();
        });
    });
</script>