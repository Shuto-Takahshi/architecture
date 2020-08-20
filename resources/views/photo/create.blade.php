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
                <form method="POST" action="{{ route('photo.store') }}">
                        <div class="form-group">
                            <label for="file-sample" class="mb-0"></label>
                            <input type="file" id="file-sample" class="form-control-file" onclick="">
                            <img class="photo-img" id="file-preview" style="width: 100%">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input class="form-control" type="text" placeholder="スポット" aria-label="text">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input class="form-control" type="text" placeholder="住所" aria-label="address">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <textarea class="form-control" name="create-textarea" rows="3" placeholder="スポットについて"></textarea>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input class="form-control" type="text" placeholder="タグ" aria-label="text">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">投稿する</button>
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
        }
        // ファイルをData URIとして読み込む
        fileReader.readAsDataURL(file);
    });
</script>


@endsection

@include('layouts.footer')
