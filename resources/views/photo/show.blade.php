@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-show">
    <div class="container">
        <div class="row">
            <div class="col p-0 mx-auto shadow-sm">
                {{-- ユーザー名 --}}
                <div class="d-flex p-2">
                    <a href="{{ route('user.show') }}" class="d-flex">
                        <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                    </a>
                    <a href="{{ route('user.show') }}" class="my-auto user-name">{{ $photo->user->name }}</a>
                    <i class="fas fa-ellipsis-h ml-auto my-auto"></i>
                </div>
                <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                <div class="p-2">
                    <div class="photo-item my-auto">
                        {{-- <button class="btn shadow-none border px-3 py-1"><i class="far fa-heart"></i></button> --}}
                        <i class="far fa-heart"></i>
                    </div>
                    {{-- タイトル --}}
                    <div class="photo-item">
                    <p class="mb-0 photo-title">{{ $photo->title }}</p>
                        {{-- <a class="ml-auto my-auto" href=""><i class="fas fa-ellipsis-h"></i></a> --}}
                    </div>
                    <div class="photo-item">
                    <p class="font-weight-light mb-0 photo-content">{{ $photo->body }}</p>
                    </div>
                    <div class="photo-item">
                        {{-- タグ --}}
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ1</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ2</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ3</a>
                    </div>
                    <div class="">
                        <i class="fas fa-map-marker-alt mr-2"></i>{{ $photo->address }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@include('layouts.footer')
