@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="photo-show">
    <div class="container py-md-4">
        <div class="row">
            <div class="col p-0 mx-auto bg-white rounded-lg">
                <div class="d-flex p-2">
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}">
                        <img class="user-img border mr-1" src="{{ $photo->user->image_path ? $photo->user->image_path : 'https://architecture-s3.s3-ap-northeast-1.amazonaws.com/default-images/user_image.png' }}" alt="image">
                    </a>
                    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                    @include('admin.photos.dropdown')
                </div>
                <img class="photo-img" src="{{ $photo->image_path }}" alt="image">
                <div class="p-3">
                    <div class="d-flex mb-2">
                        @include('photos.like')
                        @include('photos.map')
                    </div>
                    <div class="mb-3 border-bottom">
                        <div class="text-break photo-title">{{ $photo->title }}</div>
                        <div class="d-flex text-muted">
                            <i class="fas fa-map-marker-alt mr-1 my-auto"></i>
                            <div class="text-break" style="font-size: 14px">
                                {{ $photo->address }}
                            </div>
                            <div class="ml-auto my-auto">{{ $photo->created_at->format('Y/m/d') }}</div>
                        </div>
                    </div>
                    <div class="">
                        <div class="text-break" style="line-height: 25px">{{ $photo->body }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
