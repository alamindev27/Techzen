@extends('layouts.app')
@section('content')
    <main class="main-wrapper">

        <!-- Start Desktop Slider Area -->
        <div class="desktop-slide slider axil-main-slider-area main-slider-style-2">
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($banners as $banner)
                            <div class="carousel-item  {{ $loop->index == 0 ? 'active' : '' }}">
                                <a href="">
                                    <img src="{{ asset($banner->image) }}" class="d-block w-100" alt="..." />
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Mobile Slider Area -->
        <div class="mobile-slide slider axil-main-slider-area main-slider-style-2" style="padding-top: 18px;">
            <div class="container-fluid">
                <div id="McarouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($banners as $banner)
                            <div class="carousel-item  {{ $loop->index == 0 ? 'active' : '' }}">
                                <a href="">
                                    <img src="{{ asset($banner->image) }}"
                                        style="display:none" class="d-block w-100" alt="..." />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->



        <!-- Start Categorie Area  -->
        <div class="category-mobileview axil-categorie-area bg-color-white">
            <div class="container-fluid">
                <div class="page-card card-channel" data-module-id="channels" data-spm="icons" style="">
                <ul class="card-content channel-content">
                    <div class="d-flex justify-content-between col-12 category-slider">
                        @foreach ($categories as $category)
                            <li class="channel-item">
                                <a href="#" class="channel-redirect" data-spm="2">
                                    <div class="channel-icon">
                                        <div class="img-wrap">
                                            <img src="{{ $category->image }}" alt="{{ $category->category_name }}" />
                                        </div>
                                    </div>
                                    <div class="channel-name">
                                        <div class="text-wrap text-top">{{ $category->category_name }}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </div>
                </ul>
            </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <div class="desktop home-menu">
            <div class="container-fluid-fluid">
                <div class="header-navbar">
                    <div class="header-main-nav" style="box-shadow: 2px 5px 7px 0px #808080a6; margin-bottom: 30px;">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav pe-5">
                            <ul class="mainmenu slick-mainmenu">
                                @foreach ($categories as $category)
                                <li class="">
                                    <div class="border border-muted cat-image">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ $category->image }}" alt="{{ $category->category_name }}">
                                        </a>
                                    </div>
                                    <a href="#">{{ $category->category_name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->









        <!-- End Axil Newsletter Area  -->
        <div class="mobile-gap-recommended"></div>
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white pt--10">
            <div class="container-fluid">
                <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout" id="recommended_data">
                        <div class="row row--15">

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6 mb--30">
                                <style>
                                    @media only screen and (min-width: 568px) and (max-width: 768px) {
                                        .axil-product {
                                            max-height: 455px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 478px) and (max-width: 567px) {
                                        .axil-product {
                                            max-height: 412px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1850px) and (max-width: 2600px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }

                                    @media only screen and (min-width: 1024px) and (max-width: 1155px) {
                                        .axil-product {
                                            max-height: 407px !important;
                                        }
                                    }
                                </style>


                                <div class="axil-product product-style-one" style="padding: 0px !important;">
                                    <div class="thumbnail" style="padding: 10px !important">
                                        <a href="details.html">
                                            <img src="https://www.ebitanbd.com/products/for-web-post-chiseed1697868726.png" class="product_img" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget" style="background: #FFA936;">200.00 Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action d-none">
                                                <li class="quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content" style="padding: 10px !important;">
                                        <div class="inner">
                                            <h5 class="title text-start"><a href="#">Natural lemon J...</a></h5>
                                            <div class="product-price-variant text-start">
                                                <span class="price current-price text-success">৳ 790</span>
                                                <span class="price old-price text-danger">৳ 990</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="#" id="cart_form">
                                        <input type="hidden" name="_token"
                                            value="uf0sl58CtWXb9CVc7fiEd6W8ET7wAcNEg2ohW0Lc"> <input type="hidden"
                                            name="product_id" value="155">
                                        <input type="hidden" name="variation_id" value="217">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                            <div class="product-add-to-cart col-12">
                                                <ul class="cart-action col-12">
                                                    <li class="select-option col-12" style="margin-bottom: 0px;">
                                                        <button type="submit"
                                                            class="btn p-0 button m-auto text-light col-12"
                                                            style="background: #FFA936 !important;">
                                                            <p><b>
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                    &nbsp; অর্ডার করুন </b></p>
                                                            <span>
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>


            </div>
        </div>
        <!-- End Expolre Product Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white pt--10">
            <div class="container-fluid">


                <div class="hotdeal-data" style="padding-top:12px">
                    <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide"
                        id="hotdeal_data">

                    </div>
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->


        <!-- Start Image Area  -->
        <!-- End Image Area  -->
        <div class="mobile-gap-trending"></div>
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white pt--10">
            <div class="container-fluid">

                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout" id="trending_data">

                    </div>
                    <!-- End .slick-single-layout -->
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->


        <!-- Start Categorie Area  -->
        <!-- <div class="brand bg-color-white" style="margin-top: -15px;">
            <div class="container-fluid">
                <h2 class="title">Popular Brand</h2>

                <div class="row pt-5">

                </div>
            </div>
        </div> -->
        <!-- End Categorie Area  -->

    </main>
@endsection







