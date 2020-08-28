<div class="photo-footer p-2" class="d-flex">
    @if(Auth::id() === $photo->user_id)
        <a href="{{ route('user.mypage') }}" class="">
            <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
        </a>
        <a href="{{ route('user.mypage') }}" class="text-white">{{ $photo->user->name }}</a>
    @else
        <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="">
            <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
        </a>
        <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="text-white">{{ $photo->user->name }}</a>
    @endif
</div>
