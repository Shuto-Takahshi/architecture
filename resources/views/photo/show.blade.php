@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-show">
    <div class="container">
        <div class="row">
            <div class="col p-0 mx-auto shadow-sm">
                {{-- ユーザー名 --}}
                <div class="d-flex p-2">
                    <a href="" class="mr-2">
                        {{-- if文 --}}
                        <img class="user-img" src="{{ asset('/images/blank_profile.png') }}" alt="image">
                    </a>
                    <a href="" class="my-auto user-name">ユーザー名</a>
                    <i class="fas fa-ellipsis-h ml-auto my-auto"></i>
                </div>
                <img class="photo-img" src="{{ asset('/images/viktor-jakovlev-H0vuplqoX0c-unsplash.jpg') }}" alt="image">
                <div class="p-2">
                    <div class="photo-item my-auto">
                        {{-- <button class="btn shadow-none border px-3 py-1"><i class="far fa-heart"></i></button> --}}
                        <i class="far fa-heart mr-2"></i>
                        <i class="far fa-bookmark mr-2"></i>
                    </div>
                    {{-- タイトル --}}
                    <div class="photo-item">
                        <p class="mb-0 photo-title">投稿のタイトル</p>
                        {{-- <a class="ml-auto my-auto" href=""><i class="fas fa-ellipsis-h"></i></a> --}}
                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt my-auto mr-2"></i>東京都渋谷区
                        </div>
                    </div>
                    <div class="photo-item">
                        <p class="font-weight-light mb-0 photo-content">投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。投稿の内容。</p>
                    </div>
                    <div class="photo-item">
                        {{-- タグ --}}
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ1</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ2</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ3</a>
                    </div>
                </div>
            </div>
            <div class="">
            </div>
        </div>
    </div>
</div>

@endsection

@include('layouts.footer')
