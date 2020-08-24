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
                        <div class="photo-top">
                            <a href="" class="d-flex">
                                <p class="mb-0 photo-title">{{ $photo->title }}</p>
                            </a>

                        </div>
                        <div class="photo-bottom" class="d-flex">
                            <a href="{{ route('user.show') }}" class="">
                                <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                            </a>
                            <a href="{{ route('user.show') }}" class="">{{ $photo->user->name }}</a>
                            {{-- <a href="{{ route('user.show', ['user' => $photo->user->id]) }}" class="">{{ $photo->user->name }}</a> --}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

{{-- @include('layouts.footer') --}}


{{-- <div class="grid-item">
    <div class="img">
        <a href="">
            <img class="photo-img" src="{{ asset('/images/drew-patrick-miller-VLT62-JzddA-unsplash.jpg') }}" alt="image">
        </a>
        <div class="photo-top">
            <a href="" class="d-flex align-items-center">
                <p class="mb-0 photo-title">投稿のタイトル</p>
            </a>
        </div>
        <div class="photo-bottom">
        </div>
    </div>
</div>
<div class="grid-item">
    <div class="img">
        <a href="">
            <img class="photo-img" src="{{ asset('/images/hardik-joshi-hPKA4gzOq3U-unsplash.jpg') }}" alt="image">
        </a>
        <div class="photo-top">
            <a href="" class="d-flex align-items-center">
                <p class="mb-0 photo-title">投稿のタイトル</p>
            </a>
        </div>
        <div class="photo-bottom">
            <a href="" class="d-flex align-items-center">
            </a>
        </div>
    </div>
</div>
<div class="grid-item">
    <div class="img">
        <a href="">
            <img class="photo-img" src="{{ asset('/images/joel-filipe-6pq-BnMce1E-unsplash.jpg') }}" alt="image">
        </a>
        <div class="photo-top">
            <a href="" class="d-flex align-items-center">
                <p class="mb-0 photo-title">投稿のタイトル</p>
            </a>
        </div>
        <div class="photo-bottom">
            <a href="" class="d-flex align-items-center">
            </a>
        </div>
    </div>
</div>
<div class="grid-item">
    <div class="img">
        <a href="">
            <img class="photo-img" src="{{ asset('/images/julien-moreau-688Fna1pwOQ-unsplash.jpg') }}" alt="image">
        </a>
        <div class="photo-top">
            <a href="" class="d-flex align-items-center">
                <p class="mb-0 photo-title">投稿のタイトル</p>
            </a>
        </div>
        <div class="photo-bottom">
            <a href="" class="d-flex align-items-center">
            </a>
        </div>
    </div>
</div>
<div class="grid-item">
    <div class="img">
        <a href="">
            <img class="photo-img" src="{{ asset('/images/mohd-aram-QEeqd5hNzbc-unsplash.jpg') }}" alt="image">
        </a>
        <div class="photo-top">
            <a href="" class="d-flex align-items-center">
                <p class="mb-0 photo-title">投稿のタイトル</p>
            </a>
        </div>
        <div class="photo-bottom">
            <a href="" class="d-flex align-items-center">
            </a>
        </div>
    </div>
</div> --}}
