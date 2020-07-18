@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')

<section class="wthree-row pt-3 pb-sm-5 w3-contact">
<div class="container py-sm-5 pb-5">
    <h3 class="head_agileinfo text-center text-capitalize pb-2">Contact us</h3>
    <div class="row contact-form pt-lg-5">
        <div class="col-lg-6 wthree-form-left">
            <!-- contact form grid -->
            <div class="contact-top1">
                <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                <form action="{{url('user-contact')}}" method = "POST" class="f-color">
                    @csrf
                    <div class="form-group">
                        <label for="contactusername">Name</label>
                        <input type="text" class="form-control" id="contactusername" name="contactusername" required>
                    </div>
                    <div class="form-group">
                        <label for="contactemail">Email</label>
                        <input type="email" class="form-control" id="contactemail" name="contactemail" required>
                    </div>
                    <div class="form-group">
                        <label for="contactemail">Phone Number</label>
                        <input type="text" class="form-control" id="contactemail" name="contactnumber" required>
                    </div>
                    <div class="form-group">
                        <label for="contactcomment">Your Message</label>
                        <textarea class="form-control" rows="3" id="contactcomment" name="contactcomment" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </div>
                    
                </form>
            </div>
            <!--  //contact form grid ends here -->
        </div>
        <!-- contact details -->
        <div class="col-lg-6 contact-bottom pl-5 mt-lg-0 mt-5">
            <!-- contact details grid1-->
            <div class="address">
                <h5 class="pb-3 text-capitalize">Address</h5>
                <address>
                    <p class="c-txt">206 Ahmed Nagar, Mirpur 1, Dhaka 1216</p>                            
                </address>
            </div>
            <!-- contact details grid2-->
            <div class="address my-5">
                <h5 class="pb-3 text-capitalize">phone</h5>
                <p>+880 1787777383</p>
                <p>+880 1615777383</p>
                
            </div>
            <div class="address mt-md-0 mt-3">
                <h5 class="pb-3 text-capitalize">Email</h5>
                <p><a href="mailto:info@example.com">tylo.com.bd@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>
@include('/userInterface/layout/footer')