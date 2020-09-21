@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto py-5">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="text-center">ログイン</h2>
                    @include('error_list')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="">メールアドレス</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group mb-5">
                            <label for="password" class="">パスワード</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    パスワードをお忘れの方はこちら
                                </a>
                            @endif
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary w-100">
                                ログイン
                            </button>
                        </div>
                    </form>
                    <div class="mt-0 text-center">
                        <a href="{{ route('register') }}" class="card-text text-dark">ユーザー登録はこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
