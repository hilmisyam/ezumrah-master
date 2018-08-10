@extends('layouts.app')

@section('content')

<section>

    <div class="row">
        <div class="col-md-8">
            <panel>
                <template slot="title">New Bus</template>
                <template slot="action">

                </template>
                <template slot="content">
                    
                    <!--begin::Form-->
                    <form id="form-bus" class="m-form m-form--fit m-form--label-align-right" action="{{ $action }}" method="post" >

                        @if(isset($method))
                        {{ method_field($method) }}
                        @endif
                        {{ csrf_field() }}
                
                        <form-group :col="[2,6]">
                            <span slot="label">Name</span>
                            <span slot="input">
                            <input name="name" type="text" class="form-control " placeholder="Name" value="{{ $bus->name or old('name') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">Registration ID</span>
                            <span slot="input">
                                <input name="registration_id" type="text" class="form-control " placeholder="Registration ID" value="{{ $bus->registration_id or old('registration_id') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">Type</span>
                            <span slot="input">
                                <input name="type" type="text" class="form-control " placeholder="Type" value="{{ $bus->type or old('type') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">Max Seats</span>
                            <span slot="input">
                                <input name="max_seats" type="number" class="form-control " placeholder="Max Seats" value="{{ $bus->max_seats or old('max_seats') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">Start Point</span>
                            <span slot="input">
                                <input name="start_point" type="text" class="form-control " placeholder="Start Point" value="{{ $bus->start_point or old('start_point') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">End Point</span>
                            <span slot="input">
                                <input name="end_point" type="text" class="form-control " placeholder="End Point" value="{{ $bus->end_point or old('end_point') }}">
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">Start Time</span>
                            <span slot="input">
                                <time-picker placeholder="Pick time" name="start_time" 
                                value="{{ $bus->start_time or old('start_time') }}"></time-picker>
                            </span>
                        </form-group>
                
                        <form-group :col="[2,6]">
                            <span slot="label">End Time</span>
                            <span slot="input">
                                <time-picker placeholder="Pick time" name="end_time" 
                                value="{{ $bus->end_time or old('end_time') }}"></time-picker>
                            </span>
                        </form-group>

                        <form-group :col="[2,6]">
                            <span slot="label">This is just example of date picker</span>
                            <span slot="input">
                                <date-picker placeholder="Select Date"></date-picker>
                            </span>
                        </form-group>
                            <select class="mdb-select">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Example label</label>
                    </form>

                </template>
                <template slot="footer">
                    <a href="{{ route('bus.index') }}" class="btn btn-flat">Cancel</a>
                    <a onclick="$('#form-bus').submit();" class="btn btn-success">Submit</a>
                </template>

            </panel>
        </div>
    </div>

</section>

@endsection
    <script >

    </script>
@push('scripts')

{!! JsValidator::formRequest('App\Http\Requests\BusRequest', '#form-bus') !!}

@endpush

    