<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <a href="{{ route('users.show', ['user_id' => $user->id]) }}" class="mr-2">
                    <img class="rounded-circle" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image" style="width: 40px">
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
