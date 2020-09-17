@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="photo-create">
    <div class="container">
        <div class="row">
            <div class="col p-0 bg-white">
                    <div class="p-5">
                        @include('error_list')
                        <form method="POST" action="{{ route('photos.update', ['photo' => $photo->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <img class="photo-img" id="file-preview" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" style="width: 100%">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" type="text" name="title" value="{{ old('title', $photo->title) }}" aria-label="text">
                            </div>
                            <div class="form-group">
                                <label></label>
                            <textarea class="form-control" name="body" rows="3">{{ old('body', $photo->body) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label></label>
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
</div>

<script>
    document.getElementById('file-sample').addEventListener('change', function (e) {
        // 1枚だけ表示する
        var file = e.target.files[0];
        // ファイルリーダー作成
        var fileReader = new FileReader();
        fileReader.onload = function() {
            // Data URIを取得
            var dataUri = this.result;

            // img要素に表示
            var img = document.getElementById('file-preview');
            img.src = dataUri;
            img.style.display = "block";
        }
        // ファイルをData URIとして読み込む
        fileReader.readAsDataURL(file);
    });
</script>

@endsection
