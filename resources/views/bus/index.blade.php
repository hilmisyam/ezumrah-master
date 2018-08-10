@extends('layouts.app')

@section('content')

<section>

    {{-- using vue template --}}
    {{-- frontend rendering --}}
    <panel>
        <template slot="title">Bus List</template>
        <template slot="action">
            <li class="nav-item">
                <btn-action action="add" href="{{ route('bus.create') }}" v-cloak>Add</btn-icon>
            </li>
            <li class="nav-item">
                <btn-action action="update" v-cloak>Update</btn-icon>
            </li>
            <li class="nav-item">
                <btn-action action="delete" v-cloak>Delete</btn-icon>
            </li>
        </template>
        <template slot="table">
            <div class="table-responsive">

                <datatable>
                    <template slot="header">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th nowrap>Reg ID</th>
                            <th>Type</th>
                            <th nowrap>Max Seats</th>
                            <th nowrap>Start Point</th>
                            <th nowrap>End Point</th>
                            <th nowrap>Start Time</th>
                            <th nowrap>End Time</th>
                            <th>Action</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @php(
                            $no = 1                     
                        )
                        @foreach($buses as $bus)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $bus->name }}</td>
                            <td>{{ $bus->registration_id }}</td>
                            <td>{{ $bus->type }}</td>
                            <td>{{ $bus->max_seats }}</td>
                            <td>{{ $bus->start_point }}</td>
                            <td>{{ $bus->end_point }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $bus->start_time)->format('h:iA') }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $bus->end_time)->format('h:iA') }}</td>
                            <td nowrap>
                                <btn-icon action="update" href="{{ route('bus.edit', $bus->id) }}" v-cloak></btn-icon>

                                <btn-icon action="delete" href="{{ route('bus.destroy', $bus->id) }}" confirm="true" ajax="DELETE" reload="true" v-cloak></btn-icon> 
                            </td>
                        </tr>
                        @endforeach
                    </template>
                </datatable>

            </div>
        </template>
        {{-- <template slot="footer">
            <h4>Footer here</h4>
        </template> --}}

    </panel>

    {{-- using laravel blade template --}}
    {{-- backend rendering --}}
    {{-- @component('partials.panel')

        @slot('title')
        Bus List
        @endslot
        @slot('action')
        <li class="nav-item">
            <btn-action action="add" v-cloak>Add</btn-icon>
        </li>
        <li class="nav-item">
            <btn-action action="update" v-cloak>Update</btn-icon>
        </li>
        <li class="nav-item">
            <btn-action action="delete" v-cloak>Delete</btn-icon>
        </li>
        @endslot

        <div class="table-responsive">
            <!--Table-->
            <table class="table table-hover mb-0">

                <!--Table head-->
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="checkbox">
                            <label for="checkbox" class="mr-2 label-table"></label>
                        </th>
                        <th>First Name </th>
                        <th>>Last Name</th>
                        <th>>Username</th>
                        <th>>Email</th>
                        <th>>Country</th>
                        <th>>City</th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    <tr>
                        <th scope="row">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1" class="label-table"></label>
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>markotto@gmail.com</td>
                        <td>USA</td>
                        <td>San Francisco</td>
                    </tr>
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>

        @slot('footer')
        <h4>Footer here</h4>
        @endslot

    @endcomponent --}}

</section>

@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endpush