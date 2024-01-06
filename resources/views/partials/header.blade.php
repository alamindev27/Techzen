<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Site name </title>
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/techzen-06.png">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/update.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <!-- Meta Pixel Code -->
    @yield('styles')

<!-- End Meta Pixel Code -->
</head>
<body class="sticky-header" style="max-width: 1600px;margin: 0 auto">
    <a href="#top" class="back-to-top" id="backto-top" style="background: #FFA936;"><i class="fa-solid fa-arrow-up"></i></a>
    <header class="desktop header axil-header header-style-5">
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu" style="background: #FFA936 ;">
            <div class="container-fluid" style="padding-top: 10px;">
                <div class="row header-navbar">
                    <div class="col-4 d-flex justify-content-around">
                        <div>

                        </div>
                        <div class="header-brand">
                            <a href="{{ route('frontend.index') }}" class="logo logo-dark">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                            </a>
                            <a href="{{ route('frontend.index') }}" class="logo logo-light">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                            </a>
                        </div>
                    </div>

                    <div class="col-4">
                        <form action="#">
                            <div class="header-top-dropdown dropdown-box-style">

                                <div class="axil-search">
                                    <button type="submit" class="icon wooc-btn-search">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <input type="search" class="placeholder product-search-input" name="q" id="search2" value="" maxlength="128" placeholder="What are you looking for...." autocomplete="off">
                                </div>&nbsp;&nbsp;&nbsp;
                                <a href="tel:01318533187">
                                {{-- <img src="https://ebitanbd.com/public/uploads/img/callme.png" alt="Home" width="33"  height="30" style="filter: brightness(0) invert(1);"> --}}

                                <i class="fa-solid fa-phone text-white" style="font-size: 20px"></i>
                           <font color="white" size="5"> 013*******87</font></a>
                            </div>
                        </form>
                    </div>

                    <div class="col-2 text-end">
                    </div>
                    <div class="more-dp text-light col-1">
                            <div class="text-light more-btn">More <i class="fa-solid fa-angle-down"></i></div>
                            <ul class="mainmenu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Free Shipping</a></li>
                                <li><a href="#">All Offers</a></li>
                                <li><a href="#">Contact</a></li>
                                @auth
                                    <li><a href="#">Account</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                @endauth
                            </ul>

                    </div>
                    <div class="col-1">
                        <div class="header-action">
                            <ul class="action-list">


                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        <span class="cart-count" style="background: #FFA936 !important;">0</span>
                                        Cart <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktopnav container-fluid" style="border-bottom: 1px solid #f2f2f2;background-color:#ededef">

            </div>


        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header -->



    <!-- Start Header -->
    <header class="mobile header axil-header header-style-5">
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <ul class="mainmenu">
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="fa-solid fa-bars text-white"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="header-brand">
                            <a href="{{ route('frontend.index') }}" class="logo logo-dark">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                            </a>
                            <a href="{{ route('frontend.index') }}" class="logo logo-light">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                            </a>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="header-action">
                            <ul class="action-list">
                                {{-- <img src="https://ebitanbd.com/public/uploads/img/callme.png" style="width:20px;height:15px;" alt="Home"> --}}
                                <i class="fa-solid fa-phone text-white" style="font-size: 20px"></i>

                                &nbsp;
                                <a href="tel:01923699620"> </a>&nbsp;&nbsp;
                                <li class="shopping-cart">
                                    <a href="#" class="cart-dropdown-btn">
                                        <span class="cart-count" style="background: #FFA936  !important;">0</span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                                @auth
                                    <li class="my-account">
                                        <a href="#">
                                            Account
                                        </a>
                                    </li>
                                @else
                                    <li class="my-account">
                                        <a href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-navbar">

                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <div class="mobile-nav-brand">

                                <ul class="action-list">

                                  <li class="my-account">


                                  </li>

                                    <a href="{{ route('frontend.index') }}" class="logo">
                                    <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                                </a>

                              </ul>

                            </div>

                            <ul class="mainmenu">


                                <li>
                                  <a href="#">
                                  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                    </svg>
                                    <span style="padding-left: 5px;">Health Care</span>
                                  </a>
                              </li>

                                <li>
                                  <a href="#">
                                  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                    </svg>
                                    <span style="padding-left: 5px;">T shirt hub</span>
                                  </a>
                              </li>

                                <li>
                                  <a href="#">
                                  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                    </svg>
                                    <span style="padding-left: 5px;">Baby Zone</span>
                                  </a>
                              </li>

                                <li>
                                  <a href="#">
                                  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                    </svg>
                                    <span style="padding-left: 5px;">Popular</span>
                                  </a>
                              </li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
        <form action="#">
        <div class="mobilesearch col-12">
            <div class="header-top-dropdown dropdown-box-style">
                <div class="axil-search">
                    <button type="submit" class="icon wooc-btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="search" class="placeholder product-search-input" name="q" id="search2" value="" maxlength="128" placeholder="What are you looking for...." autocomplete="off">
                </div>
            </div>
        </div>
        </form>
    </header>
