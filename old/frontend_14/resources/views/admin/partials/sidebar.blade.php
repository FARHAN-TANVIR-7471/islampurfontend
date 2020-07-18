<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{URL::asset('/dashboard')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <a class="nav-link" href="{{url('/admin/product')}}"><div class="mr-3"><i class="fas fa-book-open"></i> </div>Product</a>
                    <a class="nav-link" href="{{url('admin/order')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Order</a>
                    <a class="nav-link" href="{{url('admin/contact')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Contact</a>
                    <a class="nav-link" href="{{url('/admin/gender')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Gender</a>
                    <a class="nav-link" href="{{url('/admin/product-type')}}"><div class="mr-3"><i class="fas fa-book-open"></i></div>Product Type</a>
                    
                </div>
            </div>       
        </nav>
    </div>
