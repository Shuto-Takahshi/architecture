<div class="container-fluid">
    @if (!empty($keyword) && count($photos) == 0)
        <h6 class="font-weight-bold pt-3">検索結果:{{ $keyword }}と一致する項目はありませんでした。</h6>
    @elseif (!empty($keyword))
        <h6 class="font-weight-bold pt-3">検索結果:{{ $keyword }}</h6>
    @endif

    <div class="grid">
        <div class="grid-sizer"></div>
        @foreach($photos as $photo)
        <div class="grid-item">
            <div class="grid-img">
                <a href="{{ route('photos.show', ['photo' => $photo]) }}">
                    <img class="photo-img" src="{{ $photo->image_path }}" alt="image">
                </a>
                @include('photos.header')
                @include('photos.footer')
            </div>
        </div>
        @endforeach
    </div>
</div>
