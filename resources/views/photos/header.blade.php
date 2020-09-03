<div class="photo-header p-2">
    <a href="{{ route('photos.show', ['photo' => $photo]) }}" class="d-flex text-white">
        {{ $photo->title }}
    </a>
</div>
