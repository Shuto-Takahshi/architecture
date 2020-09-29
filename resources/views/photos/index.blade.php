@extends('layouts.app')
@include('layouts.navbar', ['keyword' => $keyword])

@section('content')
@include('photos.grid')
@endsection
