@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @include('admin.photos.table')
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $photos->links() }}
</div>

@endsection
