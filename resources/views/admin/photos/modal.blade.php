<div class="modal fade photo-show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col p-0 mx-auto bg-white">
                            <div class="d-flex p-2">
                                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="d-flex">
                                    <img class="user-img border mr-1" src="{{ $photo->user->image_path ? $photo->user->image_path : 'https://architecture-s3.s3-ap-northeast-1.amazonaws.com/default-images/user_image.png' }}" alt="image">
                                </a>
                                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                                @include('admin.photos.dropdown')
                            </div>
                            <img class="photo-img" src="{{ $photo->image_path }}" alt="image">
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
</div>
