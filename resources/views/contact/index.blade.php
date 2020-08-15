@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="contact-index pb-5">
    <div class="container">
        <div class="contact-top">
            <p class="m-0 contact-title">お問い合わせ</p>
        </div>
        <div class="bg-white shadow-sm border">
            <form>
                <div class="form-row contact-item">
                    <label for="name" class="col-form-label">名前</label>
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group contact-item">
                    <label for="email" class="col-form-label">メールアドレス</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group contact-item">
                    <label for="textarea" class="col-form-label">お問合わせ件名</label>
                    <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required autocomplete="text" autofocus>
                    @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group contact-item">
                    <label for="textarea" class="col-form-label">お問合わせ内容</label>
                    <textarea id="textarea" name="textarea" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group contact-item">
                    <button class="btn btn-primary mx-0 contact-btn" type="submit">お問合わせ内容を確認する</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
@include('layouts.footer')
