@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="profile-edit">
    <div class="container py-4">
        <div class="row mx-auto">
            <div class="col bg-white p-md-5 p-4">
                @include('error_list')
                <form method="POST" action="{{ route('users.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file-sample" class="mb-0">
                            <img class="user-img" id="file-preview" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                        </label>
                        <label for="file-sample" class="mb-0">
                            <a class="btn border shadow-none p-1">写真を選択</a>
                        </label>
                        <input type="file" id="file-sample" name="user_image" class="form-control" style="display: none">
                    </div>
                    <div class="form-group">
                        <label for="name">ユーザーネーム</label>
                        <input type="text" id="name" name="user_name" value="{{ old('user_name', $user->name) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="introduction">自己紹介</label>
                        <textarea id="introduction" name="body" class="form-control">{{ old('body', $user->body) }}</textarea>
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit">プロフィールを更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
