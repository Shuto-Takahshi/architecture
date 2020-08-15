@section('navbar')


<nav class="navbar navbar-light border-bottom py-1 bg-white fixed-top px-md-4">
    <div class="font-weight-bold mr-2 home">
        <a class="px-0" href="">ArchiGallery</a>
    </div>

    {{-- form --}}
    <form class="form-inline" id="search-input">
        <div class="border bg-white d-flex">
            <button class="btn" type="button" onclick="clickBtn()"><i class="fas fa-times"></i></button>
            <input class="form-control shadow-none my-auto mr-4" type="search" placeholder="Search" aria-label="Search">
        </div>
    </form>
    <div class="border">
        <form class="form-inline">
            <input class="form-control shadow-none my-auto" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <div class="ml-auto mr-md-2 search-btn">
        <button class="btn p-0" type="button" onclick="clickBtn()">
            <i class="fas fa-search my-auto text-muted"></i>
        </button>
    </div>
    <div class="mr-2 auth-btn">
        {{-- 新規登録/ログイン --}}
        <a class="btn mr-2 border" href="">ログイン</a>
        <a class="btn btn-primary text-white m-0" href="">新規登録</a>
    </div>
    {{-- ユーザー --}}
    {{-- <div class="btn-group">
        <button class="border-0 ml-2 dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle text-light"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item py-0" href="#">プロフィール</a>
            <a class="dropdown-item text-center py-0" href="#">ログアウト</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">設定</a>
        </div>
    </div> --}}
    <!-- Basic dropdown -->
    <button class="btn shadow-none p-0 m-0 text-center dropdown-btn" id="navbar-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-chevron-down"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-right mt-1" style="width: 200px">
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
        <li class="p-2 menu-btn">
            <a class="btn border shadow-none menu-login-btn" href="#">ログイン</a>
            <a class="btn btn-primary text-white menu-register-btn" style="float: right" href="#">新規登録</a>
        </li>
        {{-- <div class="dropdown-divider my-0"></div> --}}
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
