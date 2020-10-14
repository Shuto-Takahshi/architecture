<div class="container py-4 py-md-5">
    <div class="row mx-auto">
        <div class="col p-0">
            <div class="mb-3 d-md-flex">
                <div class="pr-md-3">
                    <img class="my-img" src="{{ $user->image_path ? $user->image_path : 'https://architecture-s3.s3-ap-northeast-1.amazonaws.com/default-images/user_image.png' }}" alt="image">
                </div>
                <div class="pl-md-3">
                    <div class="font-weight-bold profile-name">{{ $user->name }}</div>
                    <div class="profile-btn">
                        @if(Auth::id() !== $user->id)
                            @include('users.follow_button')
                        @elseif(Auth::id() == $user->id)
                            <a class="btn border my-auto ml-auto" href="{{ route('users.edit', ['user_id' => $user->id]) }}">
                                <i class="fas fa-cog mr-1"></i>設定
                            </a>
                        @endif
                    </div>
                    <div class="mb-2">{{ $user->body }}</div>
                    <div>
                        @include('users.followings')
                        @include('users.followers')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
