<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo.jpg') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    @yield('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8b7c4e5629.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</head>

<body>
    @include("header")

    <div class="container-fluid main">
      @yield('content')
    </div>

    <div class="container-fluid">
      @include("footer")
    </div>

    <script>
      $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 140) {
              $('#ic').addClass("show");
          } else {
              $('#ic').removeClass("show");
          }
      });
  </script>
  <!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-238300719-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-238300719-1');
</script>
</body>

</html>
