@section('navbar')


<nav class="navbar navbar-expand navbar-light border-bottom py-1 bg-white fixed-top px-md-4">
    <div class="navbar-brand home">
        <a class="" href="{{ route('photo.index') }}">ArchiGallery</a>
    </div>

    {{-- form --}}
    <form class="form-inline bg-white" id="search-input">
        @csrf
        <div class="border d-flex">
            <button class="btn" type="button" onclick="clickBtn()"><i class="fas fa-times"></i></button>
            <input class="form-control shadow-none my-auto mr-4" type="search" placeholder="Search" aria-label="Search">
        </div>
    </form>

    {{-- <form class="form-inline" style="width: 100%">
        <input class="form-control shadow-none my-auto" type="search" placeholder="Search" aria-label="Search" style="width: inherit">
    </form> --}}

    <ul class="navbar-nav ml-auto" style="z-index: -1">
        <li class="nav-item search-btn">
            <button class="btn p-0 mr-2" type="button" onclick="clickBtn()">
                <i class="fas fa-search my-auto text-muted"></i>
            </button>
        </li>

        {{-- 新規登録/ログイン --}}
        @guest
        <li class="nav-item mr-2 my-auto auth-btn">
            <a class="btn p-0" href="{{ route('login') }}">ログイン</a>
            <a class="btn btn-primary text-white m-0" href="{{ route('register')}}">新規登録</a>
        </li>
        @endguest

        {{-- ユーザーアイコン --}}
        @auth
        <li class="nav-item mr-2">
            <div class="dropdown">
                <button class="btn shadow-none p-0 m-0 dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-img" src="{{ asset('/images/blank_profile.png') }}" alt="image">
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="p-2">
                        <a class="" href="{{ route('user.show') }}">プロフィール</a>
                    </li>
                    <li class="p-2">
                        <a class="btn btn-outline-info" href="{{ route('photo.create') }}">新規投稿</a>
                    </li>
                    <li class="p-2">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </li>
        @endauth

        <li class="nav-item">
            <div class="dropdown">
                <button class="btn shadow-none p-0 m-0 text-center dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="p-2">
                        <a class="" href="#">サイトについて</a>
                    </li>
                    <li class="p-2">
                        <a class="" href="#">お問い合わせ</a>
                    </li>
                    <li class="p-2">
                        <a class="" href="#">利用規約</a>
                    </li>
                    <li class="p-2">
                        <a class="" href="#" style="text-decoration: none">プライバシーポリシー</a>
                    </li>
                    {{-- <li class="p-2 menu-btn">
                        <a class="btn border shadow-none menu-login-btn" href="#">ログイン</a>
                        <a class="btn btn-primary text-white menu-register-btn" style="float: right" href="#">新規登録</a>
                    </li> --}}
                    {{-- <div class="dropdown-divider my-0"></div> --}}
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
