@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="container-fluid">
    @include('photos.grid')
</div>
@endsection
