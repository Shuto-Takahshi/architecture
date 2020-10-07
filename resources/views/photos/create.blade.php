@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="photo-create">
    <div class="container py-4">
        <div class="row mx-auto">
            <div class="col bg-white p-md-5 p-4">
                @include('error_list')
                <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file-sample">投稿する写真を選択してください</label>
                        <input type="file" id="file-sample" name="photo_image" class="form-control-file">
                        <img class="photo-img" id="file-preview" style="width: 100%; display: none;">
                    </div>
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="スポット名" aria-label="text">
                    </div>
                    <div class="form-group">
                        <label for="body">ストーリー<small>(1000文字以内)</small></label>
                        <textarea class="form-control" name="body" rows="3" placeholder="スポットにまつわるストーリーを入力">{{ old('body') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="address">住所</label>
                        <input class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="住所" aria-label="address">
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit">投稿する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
