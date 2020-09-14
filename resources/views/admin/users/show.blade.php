@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="profile-show">
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col">
                @include('admin.users.user')
            </div>
        </div>
    </div>
</div>
@endsection
