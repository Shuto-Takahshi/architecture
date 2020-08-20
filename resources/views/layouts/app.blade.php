<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  {{-- Scripts --}}
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

  <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" integrity="sha384-3Nqiqht3ZZEO8FKj7GR1upiI385J92VwWNLj+FqHxtLYxd9l+WYpeqSOrLh0T12c" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!--masonry-->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <!--imagesloaded-->
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

</head>

<body style="background-color: #fafafa">
    <div style="margin-bottom: 49px">
      @yield('navbar')
    </div>

    @yield('content')

    @yield('footer')

  <script>
    // init Masonry
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });

    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.masonry();
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
