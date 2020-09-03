@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-show">
    <div class="container">
        <div class="row">
            <div class="col p-0 mx-auto bg-white">
                {{-- ユーザー名 --}}
                <div class="d-flex p-2">
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="d-flex">
                        <img class="user-img border mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                    </a>
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                    @if( Auth::id() === $photo->user_id )
                        @include('photos.dropdown')
                    @endif
                </div>
                <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                <div class="p-2">
                    <div class="photo-item my-auto">
                        <photo-like
                            :initial-is-liked-by='@json($photo->isLikedBy(Auth::user()))'
                            :initial-count-likes='@json($photo->count_likes)'
                            :authorized='@json(Auth::check())'
                            endpoint="{{ route('photos.like', ['photo' => $photo]) }}"
                        >
                        </photo-like>
                    </div>
                    {{-- タイトル --}}
                    <div class="photo-item">
                    <p class="mb-0 photo-title">{{ $photo->title }}</p>
                        {{-- <a class="ml-auto my-auto" href=""><i class="fas fa-ellipsis-h"></i></a> --}}
                    </div>
                    <div class="photo-item">
                    <p class="font-weight-light mb-0 photo-content">{{ $photo->body }}</p>
                    </div>
                    <div class="">
                        <i class="fas fa-map-marker-alt mr-2"></i>{{ $photo->address }}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                @include('photos.grid')
            </div>
        </div> --}}
    </div>
</div>

@endsection


