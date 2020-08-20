@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="profile-edit py-md-5">
    <div class="container bg-white p-5">
        <div class="row mx-auto">
            <div class="col">
                <form method="POST" action="">
                    <div class="form-group profile-item">
                        <label for="file-sample" class="mb-0">
                            <img class="user-img" id="file-preview" src="{{ asset('/images/blank_profile.png') }}" alt="image">
                        </label>
                        <label for="file-sample" class="mb-0">
                            <a class="btn border shadow-none p-1">写真を選択</a>
                        </label>
                        <input type="file" id="file-sample" class="form-control" style="display: none">
                        {{-- <img id="file-preview"> --}}
                    </div>
                    <div class="form-group profile-item">
                        <label for="profile-username">ユーザーネーム</label>
                        <input type="text" id="profile-username" class="form-control">
                    </div>
                    <div class="form-group profile-item">
                        <label for="profile-introduction">自己紹介</label>
                        <textarea id="profile-introduction" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-0  profile-item">
                        <button class="btn btn-primary" type="submit">プロフィールを更新</button>
                    </div>
                </form>
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
