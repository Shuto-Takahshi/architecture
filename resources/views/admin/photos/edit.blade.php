@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="photo-create">
    <div class="container py-4">
        <div class="row mx-auto">
            <div class="col bg-white p-md-5 p-4">
                @include('error_list')
                <form method="POST" action="{{ route('admin.photos.update', ['photo' => $photo->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <img class="photo-img" src="{{ $photo->image_path }}" style="width: 100%">
                    </div>
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input class="form-control" type="text" name="title" value="{{ old('title', $photo->title) }}" aria-label="text">
                    </div>
                    <div class="form-group">
                        <label for="body">ストーリー</label>
                        <textarea class="form-control" name="body" rows="3">{{ old('body', $photo->body) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="address">住所</label>
                        <input class="form-control" type="text" name="address" value="{{ old('address', $photo->address) }}" aria-label="address">
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit">更新する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
