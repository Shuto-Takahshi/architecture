<div class="mb-3 d-md-flex">
    <div class="pr-md-3">
        <img class="my-img" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
    </div>
    <div class="pl-md-3">
        <div class="d-flex">
            <div class="font-weight-bold profile-name">{{ $user->name }}</div>
            <div class="ml-auto">
                @include('admin.users.dropdown')
            </div>
        </div>
        <p class="mb-2">{{ $user->body }}</p>
        <div>
            <a href="" class="text-muted"><span class="font-weight-bold">{{ $user->count_followings }} </span>フォロワー</a>
            <a href="" class="text-muted"><span class="font-weight-bold">{{ $user->count_followers }} </span>フォロー</a>
        </div>
    </div>
</div>
