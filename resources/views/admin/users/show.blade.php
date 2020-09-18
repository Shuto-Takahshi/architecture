@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="profile-show">
    <div class="container py-4">
        <div class="row">
            <div class="col pt-4 bg-white">
                @include('admin.users.user')
                {{-- @include('admin.photos.table') --}}
            </div>
        </div>
    </div>
</div>
@endsection
