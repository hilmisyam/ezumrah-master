<div class="card card-cascade narrower z-depth-1 mt-5">

    <!--Card image-->
    <div class="card-header white">

        <div class="row">
            <div class="col-sm">
                <h4 class="text-left my-2">{{ $title }}</h4>
            </div>
            <div class="col-sm text-right">
                <ul class="nav nav-pills card-header-pills float-right">
                {{ $action }}
                </ul>
            </div>
        </div>

    </div>
    <!--/Card image-->

    <div class="px-4 pb-4">

        {{ $slot }}

    </div>

    <div class="rounded-bottom text-center pt-3">

        {{ $footer }}
        
    </div>
</div>