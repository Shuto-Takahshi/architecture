@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="profile-show">
    <div class="bg-white">
        <div class="container">
            <div class="row mx-auto profile-info">
                <div class="col p-0">
                    <div class="mb-3 d-md-flex">
                        <div class="pr-md-3">
                            {{-- if文 --}}
                            <img class="user-img" src="{{ asset('/images/blank_profile.png') }}" alt="image">
                        </div>
                        <div class="pl-md-3">
                            <div class="font-weight-bold profile-name">ユーザー名ユーザー名ユーザー名</div>
                            <div class="profile-btn">
                                <a class="btn btn-primary shadow-none follow-btn" href=""><i class="fas fa-user-plus mr-2"></i>フォロー</a>
                                {{-- <a class="btn shadow-none border my-auto ml-auto profile-set-btn" href=""><i class="fas fa-cog mr-2"></i>設定</a> --}}
                            </div>
                            <p class=" mb-2">自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。自己紹介。</p>
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
                                <a class="nav-link active border-0 pr-2 tab-list" id="item1-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="item1" aria-selected="true">
                                    <i class="far fa-image mr-2"></i>Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-0 pr-2 tab-list" id="item2-tab" data-toggle="tab" href="#item2" role="tab" aria-controls="item2" aria-selected="false">
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
        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
            <div class="container">
                <div class="row">
                    <div class="col-4 p-4">
                        <a href="">
                            <img class="profile-photo" src="{{ asset('/images/viktor-jakovlev-H0vuplqoX0c-unsplash.jpg') }}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">This is a text of item#2.</div>
        </div>
    </div>
</div>



@endsection

@include('layouts.footer')
