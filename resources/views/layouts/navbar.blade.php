@section('navbar')
<style>
    @keyframes onAutoFillStart { from {} to {}}

    input:-webkit-autofill {
        animation-name: onAutoFillStart;
        transition: background-color 50000s ease-in-out 0s;
    }
</style>

<nav class="navbar navbar-expand navbar-light py-1 bg-white fixed-top px-md-4">
    <div class="navbar-brand home">
        <a class="text-dark" href="{{ route('photos.index') }}">ArchiGallery</a>
    </div>

    {{-- form --}}
    {{-- <form class="form-inline bg-white" id="search-input" method="GET" action="{{ route('photos.index') }}">
        @csrf
        <div class="border d-flex">
            <button class="btn" type="button" onclick="clickBtn()"><i class="fas fa-times"></i></button>
            <input class="form-control shadow-none my-auto mr-4" name="keyword" value="{{ $keyword ?? '' }}" type="search" placeholder="検索" aria-label="Search">
        </div>
    </form> --}}

    <form class="form-inline border rounded-sm">
        @csrf
        <i class="fas fa-search text-muted ml-2"></i>
        <input class="form-control shadow-none border-0 py-0" name="keyword" value="{{ $keyword ?? '' }}" type="search" placeholder="検索" aria-label="Search">
    </form>
    <ul class="navbar-nav ml-auto" style="z-index: -1">
        {{-- <li class="nav-item search-btn">
            <button class="btn p-0 mr-2" type="button" onclick="clickBtn()">
                <i class="fas fa-search my-auto text-muted"></i>
            </button>
        </li> --}}

        @guest
        <li class="nav-item mr-2 my-auto nav-btn">
            <a class="btn p-0" href="{{ route('login') }}">ログイン</a>
            <a class="btn btn-primary text-white m-0" href="{{ route('register')}}">新規登録</a>
        </li>
        @endguest

        @auth
        <li class="nav-item mr-2 my-auto">
            <div class="dropdown">
                <button class="btn shadow-none p-0 mr-2 dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::check() && isset(Auth::user()->image_path))
                        <img class="user-img border" src="{{ asset('storage/user_images/' . Auth::user()->image_path) }}"/>
                    @else
                        <img class="user-img border" src="{{ asset('/images/default_user_image.png') }}" alt="image">
                    @endif
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item py-2" href="{{ route('users.mypage') }}"><i class="fas fa-user mr-1"></i>プロフィール</a>
                    <a class="dropdown-item py-2" href="{{ route('users.edit') }}"><i class="fas fa-cog mr-1"></i>設定</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item py-2" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-1"></i>ログアウト</a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
        <li class="nav-item mr-2 my-auto nav-btn">
            <a class="btn btn-primary" href="{{ route('photos.create') }}"><i class="fas fa-plus mr-1"></i>投稿</a>
        </li>
        @endauth

        <li class="nav-item">
            <div class="dropdown">
                <button class="btn shadow-none px-0 dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="p-2">
                        <a class="" href="#">サイトについて</a>
                    </li>
                    {{-- <li class="p-2">
                        <a class="" href="{{ route('contact.index') }}">お問い合わせ</a>
                    </li> --}}
                    <li class="p-2">
                        <a class="" href="#">利用規約</a>
                    </li>
                    <li class="p-2">
                        <a class="" href="#">プライバシーポリシー</a>
                    </li>
                    <li class="p-2">
                        <div class="m-0" style="font-size: 12px">© 2020 ArchiGallery</div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<script>
    //初期表示は非表示
    document.getElementById("search-input").style.display ="none";
    function clickBtn(){
        const searchBtn = document.getElementById("search-input");
        if(searchBtn.style.display=="block"){
            // noneで非表示
            searchBtn.style.display ="none";
        }else{
            // blockで表示
            searchBtn.style.display ="block";
        }
    }
</script>
@endsection
