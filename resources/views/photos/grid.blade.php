<div class="grid">
    <div class="grid-sizer"></div>
    @foreach($photos as $photo)
        <div class="grid-item">
            <div class="grid-img">
                <a href="{{ route('photos.show', ['photo' => $photo]) }}">
                    <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                </a>
                @include('photos.header')
                @include('photos.footer')
            </div>
        </div>
    @endforeach
</div>
