<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LinkBunch</title>

    <link rel="icon" type="image/png" href="{{asset('img/grape.png')}}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
</head>

<body data-spy="scroll" data-target="#mainav">
    <section id="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-gradient fixed-top" id="indnav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainav"
                aria-controls="mainav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 order-1 order-md-0 dual-collapse2" id="mainav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how">How works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto text-center" href="#">LinkBunch<span class="sr-only">(current)</span></a>
            </div>
            <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="mainav">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard/links') }}"
                                class="text-muted">Links</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="text-muted">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"
                                    class="ml-4 text-muted">Register</a></li>
                        @endif
                        @endif
                    </ul>
                </div>
            </nav>
            <div class="main-content bg-gradient">
                <div class="container d-flex" style="height: 70vh;">
                    <div class="row align-self-center">
                        <div class="col-lg-7 col-md-7 col-12">
                            <h1>The only link you'll need remember</h1>
                            <p>Stay connected with your universe. <br>Share your bunches</p>
                            <a class="btn btn-success py-3" style="width: 250px; border-radius: 15px;" href=@auth
                                {{ url('/dashboard/links') }} @else {{ route('register') }} @endif><strong>GET
                                        STARTED FOR FREE</strong></a>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/undraw_My_universe_re_txot.svg') }}" width="400px">
                    </div>
                </div>
                <div style="height: 80px; overflow: hidden;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none"
                        style="width: 100%; height:100%">
                        <defs>
                            <linearGradient id="gradient">
                                <stop offset="5%" stop-color="#002bdcff"></stop>
                                <stop offset="95%" stop-color="#6c63ffff"></stop>
                            </linearGradient>
                        </defs>
                        <path
                            d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"
                            style="stroke: none; fill:url(#gradient)">
                        </path>
                    </svg>
                </div>
            </section>
            <section id="how">
                <div class="howwork">
                    <div class="container d-flex justify-content-center pt-5">
                        <div class="row text-center align-self-center w-100">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="icon-stack icon-stack-xl text-white m-2 bg-gradient">
                                    <img src="{{ asset('img/collaboration.svg') }}" width="40" height="40">

                                </div>
                                <h3>Join Us!</h3>
                                <p>Hi! Welcome in LinkBunch.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="icon-stack icon-stack-xl text-white m-2 bg-gradient">
                                    <img src="{{ asset('img/plus.svg') }}" width="40" height="40">

                                </div>
                                <h3>Add your links!</h3>
                                <p>Copy and paste your favourite links.</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="icon-stack icon-stack-xl text-white m-2 bg-gradient">
                                    <img src="{{ asset('img/share-link.svg') }}" width="40" height="40">

                                </div>
                                <h3>Share bunches!</h3>
                                <p>Share your personal link.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-grey" style="height: 80px; overflow: hidden;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none"
                        style="width: 100%; height:100%">
                        <path
                            d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"
                            style="stroke: none; fill:#fff">
                        </path>
                    </svg>
                </div>
            </section>
            <section id="explain">
                <div class="use bg-gradient-grey">
                    <div class="container p-5">
                        <div class="row py-5">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img class="img-fluid" src="{{ asset('img/undraw_Post_online_re_1b82.svg') }}" width="200px">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12 align-self-center pt-5">
                                <h1>Use it anywhere</h1>
                                <h5>Keep your followers up to date with what's happening to you. Paste your personal link on instagram, facebook,
                                    linkedin, share on telegram. It's a simple big link.
                                </h5>
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="d-flex col-lg-6 col-md-6 col-sm-12 order-md-last">
                                <img class="img-fluid" src="{{ asset('img/undraw_social_dashboard_k3pt.svg') }}" width="600px">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center pt-5">
                                <h1>Link to everywhere</h1>
                                <h5>Linkbunch is the binder for your latest video, article, recipe, tour, store, website,
                                    social post, everywhere you are online.</h4>
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img class="img-fluid" src="{{ asset('img/undraw_stepping_up_g6oo_purple.svg') }}"
                                    width="300px">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12 align-self-center pt-5">
                                <h1>Track link clicks</h1>
                                <h5>Lock how many people click on your links.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-imperial" style="height: 80px; overflow: hidden;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none"
                        style="width: 100%; height:100%">
                        <defs>
                            <linearGradient id="gradient-grey">
                                <stop offset="5%" stop-color="#f2f6fc"></stop>
                                <stop offset="95%" stop-color="#fefefe"></stop>
                            </linearGradient>
                        </defs>
                        <path
                            d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"
                            style="stroke: none; fill:url(#gradient-grey)">
                        </path>
                    </svg>
                </div>
            </section>
            <section id="about">
                <div class="aboutus bg-gradient-imperial">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <img class="img-fluid" src="{{ asset('img/undraw_develop_app_kvt2.svg') }}" width="400px">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 align-self-center pt-5">
                                <h1>About us</h1>
                                <p>Linkbuch was born from a university project, the idea is to create a portfolio of links to
                                    share. We have thought of various situations such as the classic link on the instagram bio,
                                    or when you want to include your projects (example: github repository) in a curriculum or on
                                    social networks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-imperial" style="height: 80px; overflow: hidden;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none"
                            style="width: 100%; height:100%">
                            <defs>
                                <linearGradient id="gradient-imperial">
                                    <stop offset="5%" stop-color="#222f3e"></stop>
                                    <stop offset="95%" stop-color="#576574"></stop>
                                </linearGradient>
                            </defs>
                            <path
                                d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"
                                style="stroke: none; fill:url(#gradient-imperial)">
                            </path>
                        </svg>
                    </div>
                </div>
            </section>
            <footer class="bg-imperial text-white text-center text-lg-start">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase">CONTACT US</h5>

                            <p>
                                The site is still under development.
                                For any questions contact me by clicking on <a
                                    href="mailto:isgro.santino@studium.unict.it">support</a> or
                                <a href="https://t.me/s4ntoo">telegram</a>. Notify me if you have any problems with the site and
                                suggest any changes.
                            </p>
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">QUICK LINKS</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#header" class="text-white">Home</a>
                                </li>
                                <li>
                                    <a href="#how" class="text-white">How works</a>
                                </li>
                                <li>
                                    <a href="#about" class="text-white">About us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">JOIN US</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{ route('register') }}" class="text-white">Register</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="text-white">Login</a>
                                </li>
                                <li>
                                    <a href="mailto:isgro.santino@studium.unict.it" class="text-white">Support</a>
                                </li>
                                <li>
                                    <a href="https://t.me/s4ntoo" class="text-white">Telegram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2021 Copyright:
                    <a class="text-white" href="https://t.me/s4ntoo">Santino Isgrò</a>
                </div>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>
            <script src="{{ asset('js/main.js') }}"></script>
        </body>
