<photo-like
    :initial-is-liked-by='@json($photo->isLikedBy(Auth::user()))'
    :initial-count-likes='@json($photo->count_likes)'
    :authorized='@json(Auth::check())'
    endpoint="{{ route('photos.like', ['photo' => $photo]) }}"
>
</photo-like>
