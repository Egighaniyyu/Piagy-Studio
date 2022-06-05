<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- my css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    {{-- Navbar --}}
    <section id="Navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href={{route('index')}}><img src="img/logo1.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto">
                        <a class="nav-link" href={{route('challenge')}}>Challenge </a>
                        <a class="nav-link" href="{{route('mentoring')}}">Mentoring</a>
                        <a class="nav-link btn btn-primary" href="{{route('unlimited_download')}}">Get Unlimited
                            Download</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link btn btn-outline-primary" href="#">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    {{-- Main Content --}}
    <div class="main-content">
        <section class="section">

            @yield('content')
        </section>
    </div>

    {{-- Footer --}}
    <section id="footer">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="footer-logo">
                            <img src="img/logo2.png" alt="logo" class="img-logo">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-title-footer">Links
                        </p>
                        <div class="footer-links">
                            <a href="{{route('challenge')}}" class="text-footer">Challenge</a>
                            <a href="{{route('mentoring')}}" class="text-footer">Mentoring</a>
                            <a href="{{route('unlimited_download')}}" class="text-footer">Get Unlimited Download</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-title-footer">Company
                        </p>
                        <div class="footer-links">
                            <a href="#" class="text-footer">Support</a>
                            <a href="#" class="text-footer">Lisence & Terms</a>
                            <a href="{{route('about')}}" class="text-footer">About</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>