<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <META NAME="robots" CONTENT="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Cosmetic Boxes | Home</title>
        <link rel="icon" href="{{ asset('assets/img/favicon1.png') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.css') }}" />
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" /> -->
        <link href="{{ asset('assets/css/jquery.smartmenus.bootstrap-4.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <style></style>
    </head>

    <body>



    <!-- ========================= Header Area Start ========================= -->

        @include('layouts.templates.frontend-navbar')

    <!-- ========================= Header Area End ========================= -->

    <!-- ========================= MainArea Start ========================= -->

    <main>

          @yield('content')

    </main>

    <!-- ========================= Header Area End ========================= -->

    <!-- ========================= Footer Area Start ========================= -->

        @include('layouts.templates.frontend-footer')

    <!-- ========================= Footer Area End ========================= -->

        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>

        <script src="{{ asset('assets/js/popper.min.js') }}"></script>

        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/js/aos.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>


              
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('assets/js/fontawesome.js')}}" crossorigin="anonymous"></script>
        
        <script src="{{asset('assets/js/main.js')}}"></script>
        
        <script type="text/javascript" src="{{ asset('assets/js/jquery.smartmenus.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/js/jquery.smartmenus.bootstrap-4.js') }}"></script>

    </body>
</html>
