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
                            @foreach ($products as $product)
                                @include('partials.single-product')
                            @endforeach




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
        {{-- <div class="axil-product-area bg-color-white pt--10">
            <div class="container-fluid">

                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout" id="trending_data">

                    </div>
                    <!-- End .slick-single-layout -->
                </div>

            </div>
        </div> --}}
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







