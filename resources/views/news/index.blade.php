@extends('layouts.app')
@include('layouts.navbar')


@section('content')

<div class="news-index">
    <div class="container">
        <div class="news">
            <p class="news-title">News</p>
        </div>
        <a href="" class="text-dark">
            <div class="media bg-white shadow-sm mb-5">
                <div class="overflow-hidden" style="width:200px; height:150px;">
                    <img class="news-img" src="{{ asset('/images/telmo-filho-pcu7Ll0pdjM-unsplash.jpg') }}" alt="Card image cap">
                </div>
                <div class="media-body pl-4 my-2">
                    <h5>ニュースタイトル</h5>
                    <p class="text-muted">2020/01/01 00:00:00</p>
                    <p>ニュースの内容 ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="media bg-white shadow-sm mb-5">
                <div class="overflow-hidden" style="width:200px; height:150px;">
                    <img class="news-img" src="{{ asset('/images/telmo-filho-pcu7Ll0pdjM-unsplash.jpg') }}" alt="Card image cap">
                </div>
                <div class="media-body pl-4 my-2">
                    <h5>ニュースタイトル</h5>
                    <p class="text-muted">2020/01/01 00:00:00</p>
                    <p>ニュースの内容 ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection

@include('layouts.footer')
