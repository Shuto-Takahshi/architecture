@extends('layouts.app')
@include('layouts.navbar', ['keyword' => $keyword])

@section('content')
@if (empty($keyword))
    @include('photos.about')
@endif
@include('photos.grid')
@endsection
