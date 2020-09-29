<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-color: #F6F6F4">
  <div style="margin-bottom: 48px">
    @yield('navbar')
  </div>

  <div id="app">
    @yield('content')
  </div>

  @yield('footer')

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>

  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      var grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
      });
      // layout Masonry after each image loads
      grid.imagesLoaded().progress( function() {
        grid.masonry('layout');
      });
      // get Masonry instance
      var msnry = grid.data('masonry');
      // init Infinite Scroll
      grid.infiniteScroll({
        path : "?page=@{{#}}",
        append: '.grid-item',
        outlayer: msnry,
        history: false,
        status: '.page-load-status',
      });
    });

  </script>
  <script>
    document.getElementById('file-sample').addEventListener('change', function (e) {
      // 1枚だけ表示する
      var file = e.target.files[0];
      // ファイルリーダー作成
      var fileReader = new FileReader();
      fileReader.onload = function() {
      // Data URIを取得
        var dataUri = this.result;

      // img要素に表示
        var img = document.getElementById('file-preview');
        img.src = dataUri;
        img.style.display = "block";
      }
      // ファイルをData URIとして読み込む
      fileReader.readAsDataURL(file);
    });
  </script>

</body>

</html>
