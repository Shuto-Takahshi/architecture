@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-index">
    <div class="container-fluid">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <div class="img">
                    <a href="">
                        <img class="photo-img" src="{{ asset('/images/ameya-sawant-89UPihhAkmo-unsplash.jpg') }}" alt="image">
                    </a>
                    <div class="photo-top">
                        <a href="" class="d-flex">
                            <p class="mb-0 photo-title">投稿のタイトル</p>
                        </a>
                    </div>
                    <div class="photo-bottom">
                        <a href="" class="d-flex">
                            <img class="user-img" src="{{ asset('/images/blank_profile.png') }}" alt="image">
                            <p class="px-2 my-auto user-name">投稿者の名前</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item">
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
            </div>
        </div>
    </div>
</div>


@endsection

@include('layouts.footer')


