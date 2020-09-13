@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="profile-show">
    @include('admin.users.user')
    @include('users.tab_info')
    <div class="tab-content">
        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
            @include('photos.grid')
        </div>
        <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">This is a text of item#2.</div>
    </div>
</div>
@endsection
