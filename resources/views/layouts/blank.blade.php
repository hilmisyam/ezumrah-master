<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('includes.head')

    @stack('css')
    

</head>

<body class="white-skin">
    
    <!--Double navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Breadcrumb-->
                <div class="breadcrumb-dn mr-auto">
                    <p>Material Design for Bootstrap</p>
                </div>
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                    </li>
                </ul>
            </nav>
        <!-- /.Navbar -->

    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
        
        <div class="container-fluid text-center mt-5 pb-5">

            @yield('content')
        
        </div>
        
    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">
    
        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>
    
            </div>
        </div>
        <!--/.Copyright-->
    
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/extra.js') }}"></script>
    <script type="text/javascript" src="{{ asset('mdbootstrap-pro/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

        @foreach (['danger', 'error', 'warning', 'success', 'info'] as $type)
            @if(Session::has('alert-' . $type))
                toast('{{ $type }}', "{{ Session::get('alert-' . $type) }}");
            @endif
        @endforeach
    
    </script>

    @stack('scripts')

</body>

</html>
