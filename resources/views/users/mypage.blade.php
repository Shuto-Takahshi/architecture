@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="profile-show">
    <div class="bg-white">
        @include('users.user')
        <div class="container">
            <div class="row tab-info">
                <div class="col">
                    <ul class="nav nav-tabs border-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active border-0 pr-2 tab-list" href="{{ route('users.mypage') }}" id="item1-tab" aria-controls="item1" aria-selected="true">
                                <i class="far fa-image mr-2"></i>Photos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border-0 pr-2 tab-list" href="{{ route('users.likes', ['user_id' => $user->id]) }}" id="item2-tab"  aria-controls="item2" aria-selected="false">
                                <i class="fas fa-heart mr-2"></i>Likes
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="photos-tab">
            @include('photos.grid')
        </div>
    </div>
</div>
@endsection
