@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="photo-show">
    <div class="container">
        <div class="row">
            <div class="col p-0 mx-auto bg-white">
                <div class="d-flex p-2">
                    <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="my-auto">
                        <img class="user-img border mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                    </a>
                    <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark">{{ $photo->user->name }}</a>
                    @include('admin.photos.dropdown')
                </div>
                <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                <div class="p-2">
                    <div class="mb-2 border-bottom">
                        <div class="photo-title">{{ $photo->title }}</div>
                        <div class="d-flex">
                            <photo-like
                                class=""
                                :initial-is-liked-by='@json($photo->isLikedBy(Auth::user()))'
                                :initial-count-likes='@json($photo->count_likes)'
                                :authorized='@json(Auth::check())'
                                endpoint="{{ route('photos.like', ['photo' => $photo]) }}"
                            >
                            </photo-like>
                            <div class="text-muted my-auto ml-auto" style="font-size: 12px">{{ $photo->created_at->format('Y/m/d') }}</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="font-weight-light">{{ $photo->body }}</div>
                    </div>
                    <div class="">
                        <i class="fas fa-map-marker-alt mr-1"></i>{{ $photo->address }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
