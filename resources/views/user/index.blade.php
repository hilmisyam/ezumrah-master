@extends('layouts.app2')

@section('content')

<div class="row">
    <div class="col-md-4">

        <!-- Card -->
        <div class="card testimonial-card">

            <!-- Bacground color -->
            <div class="card-up indigo lighten-1">
            </div>
        
            <!-- Avatar -->
            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
            </div>
        
            <div class="card-body">
                <!-- Name -->
                <h5 class="card-title">Muhammad Syimir</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>

            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        
        </div>
        <!-- Card -->

    </div>
    <div class="col-md-8">

        <div class="card" style="min-height:100%;">

            <!-- Card content -->
            <div class="card-body">
        
                <!-- Title -->
                <h4 class="card-title"><a>Card title</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
            
            </div>
        
        </div>

    </div>
</div>

@endsection
