@extends('layouts.auth')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        
        <!--Section: Live preview-->
        <section class="form-light">

            <!--Form without header-->
            <div class="card">
        
                <div class="card-body mx-4">
        
                    <!--Header-->
                    <div class="text-center">
                        <h3 class="pink-text mb-5"><strong>Sign In</strong></h3>
                    </div>

                    <form action="/login" method="POST" id="form-login" >

                        {{ csrf_field() }}
        
                        <!--Body-->
                        <div class="md-form">
                            <input type="text" id="Form-email" class="form-control" name="email">
                            <label for="Form-email">Email</label>
                        </div>
            
                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass" class="form-control" name="password">
                            <label for="Form-pass">Password</label>
                        </div>
            
                        <!--Grid row-->
                        <div class="row d-flex align-items-center mb-4 mt-5">
            
                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-pink btn-block btn-rounded z-depth-1">Sign in</button>
                            </div>
                            <!--Grid column-->
            
                        </div>
                        <!--Grid row-->

                    </form>

                </div>
        
                <!--Footer-->
                <div class="footer pt-3 unique-color-dark">
        
                    <ul class="list-unstyled list-inline text-center py-2">
                        <li class="list-inline-item">
                            <h5 class="mb-1 white-text">Register for free</h5>
                        </li>
                        <li class="list-inline-item">
                        <a href="{{ route('register') }}" class="btn btn-outline-white btn-rounded waves-effect waves-light">Sign up!</a>
                        </li>
                    </ul>
        
                </div>
        
            </div>
            <!--/Form without header-->
        
        </section>
        <!--Section: Live preview-->

    </div>
</div>

@endsection

@push('scripts')

{!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#form-login') !!}

@endpush
