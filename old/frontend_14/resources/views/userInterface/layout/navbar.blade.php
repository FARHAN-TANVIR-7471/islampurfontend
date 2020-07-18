    <!-- navbar Start-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light m-0 p-0" style="background-color: #DEE7D0;">
      <div class="" id="navbarnumber">
        <p class="pl-5"> Call +880 1XXX-XXXXXX</p>
      </div>
      <hr>
    </nav> -->

    <!--Fast Navbar-->   
    <nav class="navbar navbar-expand-lg fastcolour">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">
        <img id="logo" src="{{URL::asset('image/logo.jpg')}}">
      </a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span for="navbar-toggler"><i class="fa fa-search"></i></span>
      </button>

      <div class="collapse navbar-collapse serach-bar" id="navbarSupportedContent">
        <form class="search" action="/productshow" method="post" enctype="multipart/form-data">
          <div class="search">
            {{csrf_field()}}
              <input type="text" name="name" class="searchTerm" placeholder="Search By Product Name" style="text-align: center;">
              <button type="submit" class="searchButton" >
                <i class="fa fa-search"></i>
             </button>
         </div>
       </form>
      </div>
      <div class="" id="navbarnumber">
        <p>+880 1XXX-XXXXXX</p>
      </div>
      <div class="">

        <a href="{{route('cart.index')}}" class="btn  btn-info mt-1">
          <i class="fas fa-shopping-bag text-white"></i>
          <span class=" text-white text-bold">{{$totalproduct}}</span>
        </a>
      </div>
      <!-- <span>Login</span><span>Login</span> -->
      <!-- <p>abc</p> -->
    </nav>
    <!-- Fast Navbar end -->
    <!-- Secnd Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light sec-nav-bg-color">
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown pl-2 pr-2">
            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ready to wear
            </a>
            <div class="dropdown-menu border-0 nab-div-color" aria-labelledby="navbarDropdownMenuLink" >
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/1')}}">Basic T-shirt</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/2')}}">Printed T-shirt</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/3')}}">Polo T-shirt</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/4')}}">Shirt</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/5')}}">Pant</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/6')}}">Lungi</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/7')}}">Orna</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/8')}}">Dupatta</a>
              <a class="dropdown-item text-white font-weight-bold" href="{{url('/product/9')}}">Hijab</a>
            </div>
          </li>
          
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="{{url('/product/10')}}">YardFabtics</a>
          </li>
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="{{url('/product/11')}}">3 Pcs</a>
          </li>
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="{{url('/product/12')}}">Lace</a>
          </li>
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="{{url('/product/13')}}">Accessories</a>
          </li>
          <li class="nav-item active pl-2 pr-2">
            <a class="nav-link text-white font-weight-bold" href="{{url('/product/14')}}">Sale</a>
          </li>
          <li class="nav-item dropdown pl-2 pr-2">
            <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu border-0 nab-div-color" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-white font-weight-bold" href="{{$def}}">{{$abc}}</a>
              <!-- <a class="dropdown-item text-white font-weight-bold" href="#">Profile</a> -->
            </div>
          </li>
          
          <!-- <li class="nav-item" id="loginid">
            <a href="{{url('/login')}}" class="font-weight-bold text-white">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>
    <!-- Secnd Navbar end -->
    <!-- navbar end-->