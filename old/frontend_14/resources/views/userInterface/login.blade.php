@include('/userInterface/layout/header')
<div class="modal-dialog mt-5" id="login">
  <div class="modal-content mt-5">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Login</h5>
    </div>
    <div class="modal-body  pt-3 pb-5 px-sm-5">
        <div class="row">
            <div class="col-md-12">
                <form action="/userlogin" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder=" " name="email" id="recipient-name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="password" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Login" onclick="myFunction()">
                    </div>
                </form>
                <p class="text-center mt-3">If you have no account?
                    <a class="btn text-dark login_btn" id="sinupbtn">Sign Up Now</a>
                </p>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="agilemodal-dialog modal-dialog" id="usercreate">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/usercreate" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name " name="name" id="recipient-name1" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email " name="email" id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number " name="phone" id="recipient-number" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password " name="assword" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password " name="password" id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value=""required="" >
                                    <label for="brand2" class="mb-3">
                                        <span></span>I Accept to the Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>
                        </form>
                        <p class="text-center mt-3">Already a member?
                            <a class="btn text-dark login_btn" id="sininpbtn">
                                Login Now</a>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){

        $("#usercreate").hide();

         $("#sinupbtn").click(function(){
            $("#login").hide();
            $("#usercreate").show();
        });

        $("#sininpbtn").click(function(){
            $("#login").show();
            $("#usercreate").hide();
        });
    });
</script>
