<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right Path Canada</title>


    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- bootstrap icon cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('image/rr.png') }}" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    {{-- bootstrap, venor & css & aos --}}
    <link rel="stylesheet" href="{{ asset('/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/CSS/venor.css') }}">
    <link rel="stylesheet" href="{{ asset('/CSS/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/CSS/stylee.css') }}">

    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('lightbox2/dist/css/lightbox.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <header id="header">
        <!-- <nav class="navbar navbar-expand-md fixed-top" id="navbar" style="transition: height 0.3s ease-in-out;">
            <div class="container-fluid"> -->
        {{-- logo --}}
        <!-- <a class="navbar-brand ms-4 d-flex align-items-center" href="{{ route('home') }}">
                    <img src="{{ asset('image/logoo.png') }}" alt="" class="" height="" width="111px">
                </a> -->

        {{-- hamburger button --}}
        <!-- <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

        <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Right Path Canada</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 navbar-list">
                            <li class="nav-item">
                                <a class="{{ Request::routeIs('home') ? 'active' : '' }} nav-link"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Request::routeIs('about') ? 'active' : '' }} nav-link"
                                    href="{{ route('about') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Request::routeIs('services') ? 'active' : '' }} nav-link"
                                    href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Request::routeIs('news-blog') || Request::routeIs('blog.show') ? 'active' : '' }} nav-link"
                                    href="{{ route('news-blog') }}">News</a>
                            </li> -->
        <!-- <li class="nav-item">
                                <a class="{{ Request::routeIs('gallery') ? 'active' : '' }} nav-link"
                                    href="{{ route('gallery') }}">Gallery</a>
                            </li> -->
        <!-- <li class="nav-item">
                                <a class="{{ Request::routeIs('contact') ? 'active' : '' }} nav-link"
                                    href="{{ route('contact') }}">Contact us</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav> -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow-sm px-4 py-lg-0">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('image/logoo.png') }}" alt="" class="" height="" width="111px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 me-n3">
                    <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->
                    <a class="{{ Request::routeIs('home') ? 'active' : '' }} nav-link"
                        href="{{ route('home') }}">Home</a>
                    <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                    <a class="{{ Request::routeIs('about') ? 'active' : '' }} nav-link"
                        href="{{ route('about') }}">About us</a>
                    <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
                    <a class="{{ Request::routeIs('services') ? 'active' : '' }} nav-link"
                        href="{{ route('services') }}">Services</a>
                    <a class="{{ Request::routeIs('news-blog') || Request::routeIs('blog.show') ? 'active' : '' }} nav-link"
                        href="{{ route('news-blog') }}">News</a>
                    <a class="{{ Request::routeIs('visa') ? 'active' : '' }} nav-link"
                        href="{{ route('visa') }}">Visa</a>
                    <a class="nav-link"
                        href="">Application Checker</a>
                    <a class="{{ Request::routeIs('contact') ? 'active' : '' }} nav-link"
                        href="{{ route('contact') }}">Contact us</a>
                    <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                </div>
            </div>
        </nav>
        <!-- Navbar End -->



    </header>
    {{-- alert message --}}
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
            data-bs-delay="5000"></button>
    </div>
    @elseif (session()->has('admin'))
    <div class="container-fluid position-fixed" style="z-index: 5">
        <div class="row alert alert-danger alert-dismissible fade show" role="alert">
            <div class="col-9">
                {{ session()->get('admin') }}
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                        </form>
                    </div>
                    <div class="col">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            data-bs-delay="5000"></button>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @endif



    {{-- back to top --}}
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    {{-- second nav --}}
    {{-- <nav>
        <div class="container">
            <h1 class="logo">My Website</h1>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="toggle"></div>
        </div>
    </nav> --}}

    @yield('content')



    {{-- newsletter --}}
    <!-- <div id="newsletter" class="d-flex align-items-center mb-1 py-4 px-2"
        style="background-image: url('{{ asset('image/newsletter-bg.png') }}');">

        <div class="col-md-8 col-sm-10 col-10 mx-auto" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
            <p class="text-center newsletter-text">
                Better <span class="newsletter-orange-text">education</span> for a better world.<br> <span
                    class="newsletter-orange-text">Investment</span> in <span
                    class="newsletter-orange-text">knowledge</span> pays the best <span
                    class="newsletter-orange-text">interest.</span>
            </p>

            <form action="{{ route('newsletter.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" class="form-control rounded-start-pill" id="newsletter-input"
                        placeholder="Enter e-mail to receive news letter" name="email" @error('email') is-invalid
                        @enderror value="{{ old('email') }}">

                    <button class="btn message-button rounded-end-pill"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
            @error('email')
            <small class="text-warning">{{ $message }}</small>
            @enderror
        </div>

    </div> -->

    <!-- footer -->
    <footer class="custom-footer-styling">
        <div class="container-fluid row p-md-5 py-3 px-4">

            <div class="col-lg-4 col-md-8 my-3 custom-footer-item0">
                <a href="{{ route('home') }}"
                    class="d-flex align-items-center mb-2 mb-lg-3 link-body-emphasis text-decoration-none">
                    <img src="{{ asset('image/logoo.png') }}" height="50px" alt="">
                </a>
                <p class="text-light text-justify">
                    Right Path Canada is committed to helping individuals achieve their dream of living in Canada and to
                    provide them with
                    professional, regulated and efficient service.

                </p>
            </div>

            <div class="col-lg-2 col-md-4 my-5 mb-2 mb-lg-5 custom-footer-item1">
                <h5>Link</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('home') }}"
                            class="nav-link p-0 text-light hover-underline-animation">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('about') }}"
                            class="nav-link p-0 text-light hover-underline-animation">About Us</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('services') }}"
                            class="nav-link p-0 text-light hover-underline-animation">Services</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('news-blog') }}"
                            class="nav-link p-0 text-light hover-underline-animation">News</a></li>
                    <!-- <li class="nav-item mb-2"><a href="{{ route('gallery') }}"
                            class="nav-link p-0 text-light hover-underline-animation">Gallery</a></li> -->
                    <li class="nav-item mb-2"><a href="{{ route('contact') }}"
                            class="nav-link p-0 text-light hover-underline-animation">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-8 my-5 mb-2 mb-lg-5 custom-footer-item2">
                <h5>Find Us</h5>
                <p><i class="fa-solid fa-location-dot"></i> 2115 South Service Road W.,
                    Oakville,
                    Ontario,
                    L6L 5W2.</p>
                <p><i class="fa-sharp fa-solid fa-envelope"></i> info@rightpathcanada.com</p>
                <p><i class="fa-solid fa-phone"></i> +1 (609) 237-4269</p>
            </div>

            <div class="col-lg-2 col-md-4 my-5 mb-2 mb-lg-5 custom-footer-item3">
                <h5>Social Contact</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li class="nav-item mb-2"><a href="https://wa.me/16092374269" target="_blank" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
                    <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light"><i
                                class="fa-brands fa-telegram"></i> Telegram</a></li> -->
                </ul>
            </div>

        </div>

        <div class="container-fluid row py-4 ps-4">
            <div class="col d-flex justify-content-center custom-footer-item4">
                <p id="copyright"></p>
            </div>
        </div>

    </footer>



    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('/js/bootstrap.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/venor.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('/js/countTO.js') }}"></script>
    <script src="{{ asset('/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- <script src="{{ asset('lightbox2/dist/js/lightbox-plus-jquery.js') }}"></script> -->
    <!-- Adding scripts to use bootstrap -->
    {{--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script> --}}

    {{-- aos js --}}
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    {{-- end of my javascript --}}


    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/mainn.js') }}"></script>

    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();

        // Update the copyright text with the current year
        document.getElementById("copyright").innerHTML = "Copyright © Right Path Canada " + currentYear + ". All Rights Reserved.";
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65e203188d261e1b5f6755df/1hntdo6rd';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>