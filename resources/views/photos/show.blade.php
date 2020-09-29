@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-show">
    <div class="container py-md-4">
        <div class="row">
            <div class="col p-0 mx-auto bg-white">
                <div class="d-flex p-2">
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="d-flex">
                        <img class="user-img border mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                    </a>
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                    @if( Auth::id() === $photo->user_id )
                        @include('photos.dropdown')
                    @endif
                </div>
                {{-- <div class="photo-flame text-center"> --}}
                <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                {{-- </div> --}}
                <div class="p-2">
                    <div class="d-flex">
                        <photo-like
                            :initial-is-liked-by='@json($photo->isLikedBy(Auth::user()))'
                            :initial-count-likes='@json($photo->count_likes)'
                            :authorized='@json(Auth::check())'
                            endpoint="{{ route('photos.like', ['photo' => $photo]) }}"
                        >
                        </photo-like>
                        <div class="text-break ml-auto">{{ $photo->created_at->format('Y/m/d') }}</div>
                    </div>
                    <div class="">
                        <div class="text-break photo-title">{{ $photo->title }}</div>
                        <div class="text-break mb-2" style="font-size: 14px">{{ $photo->body }}</div>
                    </div>
                    <i class="fas fa-map-marker-alt mr-2"></i>{{ $photo->address }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
