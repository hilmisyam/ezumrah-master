<!-- SideNav slide-out button -->
<div class="float-left d-block d-sm-none">
    <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
</div>
<!-- Breadcrumb-->
<form class="form-inline">
    <div class="md-form my-0 ml-4">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width:100%;">
    </div>
</form>
<ul class="nav navbar-nav nav-flex-icons ml-auto">
    <li class="nav-item">
        <a class="nav-link waves-effect waves-light">1
            <i class="fa fa-bell"></i>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ route('user.index') }}">Profile</a>
            <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
        </div>
    </li>
</ul>