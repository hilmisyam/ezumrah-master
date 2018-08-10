@extends('layouts.auth')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        
        <!--Section: Live preview-->
        <section class="form-light mb-5">

            <!--Form without header-->
            <div class="card">
        
                <div class="card-body mx-4">
        
                    <!--Header-->
                    <div class="text-center">
                        <h3 class="pink-text mb-5"><strong>Sign Up</strong></h3>
                    </div>

                    <form action="/register" method="POST" id="form-register" >

                        {{ csrf_field() }}
        
                        <!--Body-->
                        <div class="md-form">
                            <input type="text" id="Form-name" class="form-control" name="name">
                            <label for="Form-name">Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="Form-email" class="form-control" name="email">
                            <label for="Form-email">Email</label>
                        </div>
            
                        <div class="md-form">
                            <input type="password" id="Form-pass" class="form-control" name="password">
                            <label for="Form-pass">Your password</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass2" class="form-control" name="password_confirmation">
                            <label for="Form-pass2">Your password</label>
                        </div>
            
                        <!--Grid row-->
                        <div class="row d-flex align-items-center mb-4 mt-5">
            
                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-pink btn-block btn-rounded z-depth-1">Sign up</button>
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
                            <h5 class="mb-1 white-text">Already have an account?</h5>
                        </li>
                        <li class="list-inline-item">
                        <a href="{{ route('login') }} " class="btn btn-outline-white btn-rounded waves-effect waves-light">Sign in</a>
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

{!! JsValidator::formRequest('App\Http\Requests\RegisterRequest', '#form-register') !!}

@endpush
