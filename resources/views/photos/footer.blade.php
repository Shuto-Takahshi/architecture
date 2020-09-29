<div class="photo-footer p-md-2 p-1" class="d-flex">
    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="">
        <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
    </a>
    <a href="{{ route('users.show', ['user_id' => $photo->user_id]) }}" class="text-white user-name">{{ $photo->user->name }}</a>
</div>
