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
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">
                @include('templates.navbar')
            </div>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main class="mt-5 pt-5">
        
        <div class="container text-center pb-5">

            @yield('content')
        
        </div>
        
    </main>
    <!--/Main layout-->

    <!--Footer-->
    @include('templates.footer')
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
