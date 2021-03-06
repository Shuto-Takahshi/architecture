@section('navbar_admin')

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="{{ route('admin.home') }}">ArchiGallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.home') }}">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-user mr-1"></i>ユーザー</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.photos.index')}}"><i class="fas fa-image mr-1"></i>写真</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-1"></i>ログアウト
                </a>
                <form id="logout-form" method="POST" action="{{ route('admin.logout') }}" style="display: none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>

@endsection
