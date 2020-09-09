<div class="container py-4 py-md-5">
    <div class="row mx-auto">
        <div class="col p-0">
            <div class="mb-3 d-md-flex">
                <div class="pr-md-3">
                    <img class="my-img" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                </div>
                <div class="pl-md-3">
                    <div class="font-weight-bold profile-name">{{ $user->name }}</div>
                    <div class="profile-btn">
                        @if(Auth::id() !== $user->id)
                            <follow-button class="ml-auto"
                            :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
                            :authorized='@json(Auth::check())'
                            endpoint="{{ route('users.follow', ['user' => $user]) }}"
                            >
                            </follow-button>
                        @elseif(Auth::id() == $user->id)
                            <a class="btn border my-auto ml-auto" href="{{ route('users.edit') }}"><i class="fas fa-cog mr-1"></i>設定</a>
                        @endif
                    </div>
                    <p class=" mb-2">{{ $user->body }}</p>
                    <div>
                        <a href="" class="text-muted"><span class="font-weight-bold">{{ $user->count_followings }} </span>フォロワー</a>
                        <a href="" class="text-muted"><span class="font-weight-bold">{{ $user->count_followers }} </span>フォロー</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
