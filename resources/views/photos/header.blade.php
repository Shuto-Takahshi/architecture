<div class="photo-header p-2">
    <a href="{{ route('photos.show', ['photo' => $photo]) }}" class="text-white text-break">
        {{ $photo->title }}
    </a>
</div>
