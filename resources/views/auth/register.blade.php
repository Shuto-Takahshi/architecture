@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto py-5">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="text-center">新規登録</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="">ユーザーネーム</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="">メールアドレス</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="">パスワード</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label for="password-confirm" class="">パスワードの確認</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary">
                                登録する
                            </button>
                        </div>
                    </form>
                    <div class="mt-0 text-center">
                        <a href="{{ route('register') }}" class="card-text">ログインはこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
