@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="profile-show">
    <div class="bg-white">
        <div class="container">
            <div class="row mx-auto">
                <div class="col p-0">
                    <div class="mb-3 d-md-flex">
                        <div class="pr-md-3">
                            <img class="my-img border" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                        </div>
                        <div class="pl-md-3">
                            <div class="font-weight-bold profile-name">{{ $user->name }}</div>
                            <div class="profile-btn">
                                {{-- <a class="btn btn-primary shadow-none" href=""><i class="fas fa-user-plus mr-1"></i>フォロー</a> --}}
                                <a class="btn border my-auto ml-auto" href="{{ route('users.edit') }}"><i class="fas fa-cog mr-1"></i>設定</a>
                            </div>
                            <p class=" mb-2">{{ $user->body }}</p>
                            <div>
                                <a href="" class=""><span class="font-weight-bold">100 </span>フォロワー</a>
                                <a href="" class=""><span class="font-weight-bold">100 </span>フォロー</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- タブ --}}
        <div class="border-bottom mt-3">
            <div class="container">
                <div class="row tab-info">
                    <div class="col">
                        <ul class="nav nav-tabs border-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-0 pr-2 tab-list" id="item1-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="true">
                                    <i class="far fa-image mr-2"></i>Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-0 pr-2 tab-list" id="likes-tab" data-toggle="tab" href="#likes" role="tab" aria-controls="likes" aria-selected="false">
                                    <i class="fas fa-heart mr-2"></i>Likes
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="photos-tab">
            <div class="container-fluid">
                @include('photos.grid')
            </div>
        </div>
        <div class="tab-pane fade" id="likes" role="tabpanel" aria-labelledby="likes-tab">This is a text of item#2.</div>
        </div>
    </div>
</div>
@endsection
