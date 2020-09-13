@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            @include('admin.users.table')
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mt-5">
    {{ $users->links() }}
</div>
@endsection
