<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css');
</head>

<body>
    <!-- Topbar Start -->
    @include('user.topbar');
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->


    <!-- Featured Start -->
    @include('user.featured');
    <!-- Featured End -->


    <!-- Categories Start -->
    @include('user.categories');
    <!-- Categories End -->


    <!-- Offer Start -->
    @include('user.offer')
    <!-- Offer End -->


    <!-- Products Start -->
    @include('user.products')
    <!-- Products End -->


    <!-- Subscribe Start -->
   @include('user.subscribe')
    <!-- Subscribe End -->


    <!-- Products Start -->
    @include('user.arrivedproducts');
    <!-- Products End -->


    <!-- Vendor Start -->
    @includeIf('user.vendor');
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include('user.footer');
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{url('/')}}" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('user.js');
</body>

</html>
