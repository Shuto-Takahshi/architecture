<div class="top">
    <img class="" src="{{ asset('/images/top_image.jpg') }}" alt="image" style="width: 100%">
    <div class="about">
        <h1 class="text-white">Welcome to ArchiGallery</h1>
        <h6 class="text-white text-break mb-4">ArchiGalleryは建築写真投稿サイトです。</h6>
        @guest
            <a class="btn btn-outline-light" href="{{ route('register')}}">新規登録はこちら</a>
        @endguest
    </div>
</div>
