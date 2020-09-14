@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="bg-white p-2">
                <form class="form-inline my-2 my-lg-0" action="{{ route('admin.photos.index') }}">
                    @include('admin.search_form')
                </form>
            </div>
            @include('admin.photos.table')
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $photos->links() }}
</div>

@endsection
