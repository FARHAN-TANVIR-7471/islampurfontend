  <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Quick links</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Quick links</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Quick links</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
              <li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
              
              <li class="list-inline-item"><a href="https://www.facebook.com/islampurmarket" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/islampurmarket" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          <hr>
        </div>  
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <!-- <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p> -->
            <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://softifydigital.com/" target="_blank">Softify Digital</a></p>
          </div>
          <hr>
        </div>  
      </div>
    </section>
    <!-- ./Footer -->   

    <!-- login popup --> 
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body  pt-3 pb-5 px-sm-5">
            <div class="row">
                <!-- <div class="col-md-6 align-self-center">
                    <img src="{{URL::asset('images/p3.png')}}" class="img-fluid" alt="login_image" />
                </div> -->
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
                    <p class="text-center mt-3">If you have no accout?
                        <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn" >
                            Sinup Now</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 mx-auto align-self-center">
                        <img src="{{URL::asset('images/p3.png')}}" class="img-fluid" alt="login_image" />
                    </div>
                    <div class="col-md-6">
                        <form action="/usercreate" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name " name="name" id="recipient-name1" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email " name="email" id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Phone Number " name="phone" id="recipient-number" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password " name="assword" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password " name="password" id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2" class="mb-3">
                                        <span></span>I Accept to the Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>
                        </form>
                        <p class="text-center mt-3">Already a member?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                Login Now</a>
                        </p>
                        <hr>
                        
                        <!-- <p class="text-center m-3 text-info">*Register Facebook or Google</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info btn-sm btn-block"><i class="fab fa-facebook-square mr-2"></i>facebook</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-sm btn-block"><i class="fab fa-google mr-2"></i>Google</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>  
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script type="module">
      var slider = tns({ 
        "container": ".slider-wrapper",
        "autoHeight": false,
        "items": 1,
        "mouseDrag": true,
        "speed": 500,
        "controls":false,
        "nav":false,
        "autoplay": true
      });
    </script>
  </body>
</html>