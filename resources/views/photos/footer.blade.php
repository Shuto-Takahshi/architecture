<div class="photo-footer d-flex my-auto p-md-2 p-1">
    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="">
        {{-- <img class="user-img mr-1" src="{{ $photo->user->image_path : asset('/images/default_user_image.png')}}" alt="image"> --}}
        <img class="user-img mr-1" src="{{ $photo->user->image_path ? $photo->user->image_path : 'https://architecture-s3.s3-ap-northeast-1.amazonaws.com/default-images/user_image.png' }}" alt="image">
    </a>
    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="text-white user-name">{{ $photo->user->name }}</a>
</div>
