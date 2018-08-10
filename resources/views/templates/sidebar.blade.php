<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
            <a href="#"><img src="{{ asset('img/ezumrah.png') }}" class="img-fluid flex-center"></a>
            </div>
        </li>
        <!--/. Logo -->

        <!--Dropdown primary-->
        <div class="dropdown text-center">

            <!--Trigger-->
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
    
    
            <!--Menu-->
            <div class="dropdown-menu dropdown-primary">
                <a class="dropdown-item" href="#">Profile</a>
            </div>
        </div>
        <!--/Dropdown primary-->


        <!-- Side navigation links -->
        @include('templates.sidebar-menu')
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>