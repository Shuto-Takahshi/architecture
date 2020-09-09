@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="profile-show">
    <div class="bg-white">
        @include('users.user')
        @include('users.tab_info')
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
            @include('photos.grid')
        </div>
        <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">This is a text of item#2.</div>
    </div>
</div>
@endsection
