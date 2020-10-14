<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <a href="{{ route('users.show', ['user_id' => $user->id]) }}" class="mr-2">
                    <img class="rounded-circle" src="{{ $user->image_path ? $user->image_path : 'https://architecture-s3.s3-ap-northeast-1.amazonaws.com/default-images/user_image.png' }}" alt="image" style="width: 40px">
                </a>
                <a href="{{ route('users.show', ['user_id' => $user->id]) }}" class="my-auto text-dark">
                    {{ $user->name }}
                </a>
                <div class="ml-auto">
                    @if(Auth::id() !== $user->id)
                        @include('users.follow_button')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
