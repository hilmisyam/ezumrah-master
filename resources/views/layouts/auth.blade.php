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
        
        <nav class="navbar navbar-dark primary-color navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <strong>MDB</strong>
                </a>
            </div>
        </nav>
        
        <!-- /.Navbar -->

    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main id="app">
        
        <div class="container text-center pt-5 pb-5">

            @yield('content')
        
        </div>
        
    </main>
    <!--/Main layout-->

    <!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href=""> web.com</a>
        </div>
        <!-- Copyright -->
        
    </footer>
    <!-- Footer -->

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
