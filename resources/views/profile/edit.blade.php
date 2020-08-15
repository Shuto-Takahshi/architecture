@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="profile-edit py-md-5">
    <div class="container bg-white px-0">
        <div class="row mx-auto">
            <div class="col-md-3 text-area">
                <ul class="nav nav-tabs border-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active border-0 p-0 tab-list" id="item1-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="item1" aria-selected="true">
                            プロフィールを編集
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%">
                        <a class="nav-link border-0 p-0 tab-list" id="item2-tab" data-toggle="tab" href="#item2" role="tab" aria-controls="item3" aria-selected="true">
                            メールアドレス変更
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-0 p-0 tab-list" id="item3-tab" data-toggle="tab" href="#item3" role="tab" aria-controls="item2" aria-selected="false">
                            パスワード変更
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 profile-area">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
                        <form>
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
                            <div class="form-group profile-item">
                                <button class="btn btn-primary shadow-none m-0" type="submit">プロフィールを更新</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">
                        <div>メールアドレスの変更</div>
                    </div>
                    <div class="tab-pane fade" id="item3" role="tabpanel" aria-labelledby="item3-tab">
                        <div>パスワードの変更</div>
                    </div>
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
