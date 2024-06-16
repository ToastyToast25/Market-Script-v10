@extends('master.main')

@section('title', 'Profile settings')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="dashboard-left-main">
            @include("includes.profile.menu")
            </div>
        </div>
<div class="col-md-9">
     <div class="dashboard-right-main">
    @yield("profile-content")
    </div>
</div>

</div>


@stop