<div class="p-2 bg-white">
    <a href="{{ route('photo.show', ['photo' => $photo]) }}" class="d-flex text-dark">
        {{ $photo->title }}
    </a>
    <div class="d-flex">
        @if(Auth::id() === $photo->user_id)
        <a href="{{ route('user.mypage') }}" class="">
            <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
        </a>
        <a href="{{ route('user.mypage') }}" class="text-dark" style="font-size: 13px">{{ $photo->user->name }}</a>
        @else
        <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="">
            <img class="user-imgs mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
        </a>
        <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="text-dark">{{ $photo->user->name }}</a>
        @endif
    </div>
</div>
