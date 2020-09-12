@extends('layouts.app_admin')
@include('layouts.navbar')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto py-5">
            <div class="card">

                <div class="card-body p-5">
                    <h2 class="text-center">ログイン</h2>
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="">メールアドレス</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group mb-5">
                            <label for="password" class="">パスワード</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary">
                                ログイン
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
