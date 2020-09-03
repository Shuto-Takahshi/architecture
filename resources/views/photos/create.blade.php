@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-create">
    <div class="container py-5">
        <div class="bg-white shadow-sm">
            <div class="p-5">
                <div class="create">
                    <h2>新規投稿</h2>
                </div>

                @include('error_list')

                <form method="POST" action="{{ route('photo.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file-sample" class="mb-0"></label>
                        <input type="file" id="file-sample" name="photo_image" class="form-control-file">
                        <img class="photo-img" id="file-preview" style="width: 100%; display: none;">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input class="form-control" type="text" name="title" placeholder="スポット" aria-label="text">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <textarea class="form-control" name="body" rows="3" placeholder="スポットについて"></textarea>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input class="form-control" type="text" name="address" placeholder="住所" aria-label="address">
                    </div>
                    {{-- <div class="form-group">
                        <label></label>
                        <input class="form-control" type="text" placeholder="タグ" aria-label="text">
                    </div> --}}
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">投稿する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@include('layouts.footer')
