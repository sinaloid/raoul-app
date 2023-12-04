<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo.jpg') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8b7c4e5629.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</head>

<body>
    @include('header')
    <!--div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-select changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                </select>
            </div>
        </div>

        <h3>{{ GoogleTranslate::trans('Welcome', app()->getLocale()) }}</h3>
        <h3>{{ GoogleTranslate::trans('Hello World', app()->getLocale()) }}</h3>
    </div-->
    <div class="container-fluid main">
        @yield('content')
    </div>

    <div class="container-fluid">
        @include('footer')
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-238300719-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-238300719-1');
    </script>
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
</body>

</html>
