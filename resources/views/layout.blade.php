<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/build/style.css') }}">
    <title>Document</title>


</head>

<body>
    <div class="page">
        <header>
            <section class="header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light row">
                    <div class="d-inline-flex align-items-center col-md-4">
                        <h1 class="navbar-brand pt-2" style="font-weight: 700; font-size:30px ;">HORIZON</h1>
                        <div class="d-inline-flex p-2 navBarColor" style="height: 50px; font-size: 20px; border-radius: 10px;">
                            <p class="mx-auto text-white">news</p>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse col-md-8" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/projects">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">News</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Sport</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Tech</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Life</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Business</a>
                            </li>
                        </ul>
                        <div class="d-inline-flex align-items-center col-mb-4">
                            <p class="pt-3 text-secondary mr-2">Lutsk +10°C</p>
                            <button class="supportUs mr-2">Support Us</button>
                            <ul class="navbar-nav ms-auto">
                                @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif

                                @else
                                <li class="nav-item ">
                                    <button class="btn btn-primary supportUs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        {{ Auth::user()->name }}
                                    </button>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="collapse" id="collapseExample">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-light row">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/projects/create">News manage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </header>

        <main>
            <section class="contentSpace">
                @yield('contentSpace')
            </section>
        </main>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom footer">
                <div class="me-5 d-none d-lg-block">
                    <span>Explore the Horizon:</span>
                </div>

                <div class="d-inline-flex">
                    <span><a href="#" class="me-4 text-reset">Terms of use</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">About the HN</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">Privacy Policy</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">Cookies</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">Accesibility Help</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">Parental Guidance</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">Contact th HN</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">HN emails for you</a></span>
                    <div class="vh mx-1"></div>
                    <span><a href="#" class="me-4 text-reset">AdChoices / Do Not Sell My Info</a></span>
                </div>
            </section>

            <section class="footer">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                The HN
                            </h6>
                            <p>
                                Is not responsible for the content of external sites.
                                <a href="#">Read about our approach to external linking.</a>
                            </p>
                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <h6 class="text-uppercase fw-bold mb-4">Our world</h6>

                            <p>
                                <a href="#!" class="text-reset">News</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Tech</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Sport</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Weather</a>
                            </p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <h6 class="text-uppercase fw-bold mb-4">For you</h6>

                            <p>
                                <a href="#!" class="text-reset">Life</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Travel</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">TV</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Worklife</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p> Lutsk, 43000-499, UA</p>
                            <p> norizonNews@gmail.com</p>
                            <p> +380-66-91-24-187</p>
                            <p> +380-92-20-15-982</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright:
                <a class="text-reset fw-bold footerlinks" href="#">Horizon.com</a>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>