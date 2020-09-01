@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-index">
    <div class="container-fluid">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($photos as $photo)
                <div class="grid-item">
                    <div class="img">
                        <a href="{{ route('photo.show', ['photo' => $photo]) }}">
                            <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                        </a>
                        @include('photo.header')
                        @include('photo.footer')
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
