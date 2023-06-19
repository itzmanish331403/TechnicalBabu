<!DOCTYPE html>
<html lang="en">

<head>
<!-- header links -->
@include('includes.dashboard-headlinks')
<!-- header links -->
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
     @include('includes.dashboard-sidebar-menu')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('includes.dashboard-nav-menu')
            <!-- Navbar End -->



            @yield('page-content') 




            <!-- Footer Start -->
  @include('includes.dashboard-footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    @include('includes.dashboard-footer-script')
    @yield('buttomsection')
    @yield('script')
    <!-- JavaScript Libraries -->

</body>

</html>