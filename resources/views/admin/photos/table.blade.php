<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th scope="col" width="5%">ID</th>
            <th scope="col" width="20%">写真</th>
            <th scope="col" width="20%">タイトル</th>
            <th scope="col" width="25%">投稿者</th>
            <th scope="col" width="30%">投稿日</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <th  width="5%">{{ $photo->id }}</th>
            <th  width="20%">
                <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}">
                    <img class="admin-photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                </a>
                {{-- <a class="" data-toggle="modal" data-target="#exampleModal">
                    <img class="admin-photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                </a> --}}
            </th>
            <td width="20%">
                <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}">
                    {{ $photo->title }}
                </a>
            </td>
            <td width="25%">
                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}">
                    {{ $photo->user->name }}
                </a>
            </td>
            <td width="30%">{{ $photo->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- <div class="modal fade photo-show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col p-0 mx-auto bg-white">
                            <div class="d-flex p-2">
                                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="d-flex">
                                    <img class="user-img border mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                                </a>
                                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                                @include('admin.photos.dropdown')
                            </div>
                            <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                            <div class="p-2">
                                <div class="mb-2">
                                    <p class="mb-0 photo-title">{{ $photo->title }}</p>
                                    <p class="">{{ $photo->created_at->format('Y/m/d') }}</p>
                                </div>
                                <div class="mb-2 my-auto">
                                    <photo-like
                                        :initial-is-liked-by='@json($photo->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($photo->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('photos.like', ['photo' => $photo]) }}"
                                    >
                                    </photo-like>
                                </div>
                                <div class="mb-2">
                                    <p class="font-weight-light mb-0 photo-content">{{ $photo->body }}</p>
                                </div>
                                <div class="">
                                    <i class="fas fa-map-marker-alt mr-2"></i>{{ $photo->address }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}
