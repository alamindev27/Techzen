@extends('layouts.app')
@section('content')
<main class="main-wrapper">
    <!-- Start Shop Area  -->
    <div class="axil-single-product-area p pb--0 bg-color-white">
        <div class="single-product-thumb mb--5">
            <div class="container-fluid p-5 mobile_show">
                <div class="row">
                    <div class="col-lg-5 mb--10">
                        <div class="row">
                            <div class="col-lg-10 order-lg-2">
                                <div class="single-product-thumbnail-wrap zoom-gallery">
                                    <div
                                        class="single-product-thumbnail product-large-thumbnail-3 img-section axil-product">
                                        <div class="thumbnail">
                                            <a href="https://www.ebitanbd.com/products/Talking-bird1696878861.jpg" class="popup-zoom">
                                                <img src="https://www.ebitanbd.com/products/Talking-bird1696878861.jpg" class="img-fluid">

                                            </a>
                                        </div>

                                        <div class="thumbnail">
                                            <a href="https://www.ebitanbd.com/products/65000483d3d541696878861.jpg" class="img-fluid"
                                                class="popup-zoom">
                                                <img src="https://www.ebitanbd.com/products/65000483d3d541696878861.jpg" class="img-fluid"
                                                    alt="Talking Bird Images">
                                            </a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="https://www.ebitanbd.com/products/download (1)1696878861.jpg"
                                                class="popup-zoom">
                                                <img src="https://www.ebitanbd.com/products/download (1)1696878861.jpg"
                                                    alt="Talking Bird Images">
                                            </a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="https://www.ebitanbd.com/products/download1696878861.jpg"
                                                class="popup-zoom">
                                                <img src="https://www.ebitanbd.com/products/download1696878861.jpg"
                                                    alt="Talking Bird Images">
                                            </a>
                                        </div>

                                    </div>

                                    <div class="label-block">
                                        <div class="product-badget" style="background: #FFA936;">Tk :400.00 OFF
                                        </div>
                                    </div>
                                    <div class="product-quick-view position-view">
                                        <a href="https://www.ebitanbd.com/products/Talking-bird1696878861.jpg" class="popup-zoom img-fluid">
                                            <i class="far fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 order-lg-1">
                                <div class="product-small-thumb-3 small-thumb-wrapper">
                                    <div class="small-thumb-img">
                                        <img src="https://www.ebitanbd.com/products/Talking-bird1696878861.jpg" class="img-fluid" alt="Talking Bird image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="https://www.ebitanbd.com/products/65000483d3d541696878861.jpg" class="img-fluid"
                                            alt="Talking Bird image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="https://www.ebitanbd.com/products/download (1)1696878861.jpg"
                                            alt="Talking Bird image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="https://www.ebitanbd.com/products/download1696878861.jpg"
                                            alt="Talking Bird image">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mb--30">
                        <div class="single-product-content">
                            <div class="inner" style="color:#000">
                                <div class="product-meta">
                                    <div style="">
                                        <h2 class="product-title" style="margin:0px">Talking Bird</h2>
                                    </div>
                                    <div style="">
                                        <div class="product-price-variant">
                                            <span class="price current-price" style="">৳ 850.00</span>
                                                <span class="price old-price text-danger" style="font-size:28px;margin-left:10px;"><del class="text-danger">1250</del></span>
                                                <span class="price old-price" style="font-size:16px;margin-left:12px;background: #FFA936;padding:4px;color:#fff">400.00 Tk OFF </span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <form method="POST" action="https://www.ebitanbd.com/carts" id="cart_form">
                                    <input type="hidden" name="_token" value="xA5XPhc6jo2UGToimYaBmffGsSTveNDv9iYbi1yw">
                                    <input type="hidden" name="variation_id" value="221">
                                    <style>
                                        .sizes {
                                            display: flex;
                                        }

                                        .sizes .size {
                                            padding: 5px;
                                            margin: 5px;
                                            border: 1px solid #FFA936;
                                            width: auto;
                                            text-align: center;
                                            cursor: pointer;
                                        }

                                        .sizes .size.active {
                                            background: #FFA936;
                                            color: white;
                                        }
                                    </style>



                                    <div class="product-action-wrapper d-flex-center" style="margin-bottom: 15px;">
                                        <!-- Start Quentity Action  -->
                                        <input type="hidden" name="product_id" value="159">
                                        <input type="hidden" name="is_stock" value="0">
                                        <div class="pro-qty item-quantity">
                                            <span class="dec qtybtn fw-bold">-</span>
                                            <input type="number" class="quantity-input" value="1" disabled name="quantity" />
                                            <span class="inc qtybtn fw-bold">+</span>
                                        </div>

                                        <!-- End Quentity Action  -->
                                        <!-- Start Product Action  -->

                                        <ul class="product-action d-flex-center mb--0" style="margin-left: 22px;">
                                            <li class="add-to-cart" style="margin: 0px;">
                                                <button class="axil-btn text-nowrap text-white" style="padding:7px 28px; background: #FFA936; width: 100% !important;"><i class="fa-solid fa-cart-shopping"></i> &nbsp; কার্টে যোগ করুন</button>
                                            </li>
                                        </ul>
                                        <!-- End Product Action  -->
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 10px;">
                                <form method="POST" action="https://www.ebitanbd.com/cart/store" id="cart_submit">
                                    <input type="hidden" name="_token"
                                        value="xA5XPhc6jo2UGToimYaBmffGsSTveNDv9iYbi1yw"> <input type="hidden"
                                        name="product_id" value="159">
                                    <!--<input type="hidden" name="variation_id" id="size-value" name="variation_id">-->
                                    <input type="hidden" name="variation_id" id="size_value1" value="221">
                                    <input type="hidden" name="is_stock" value="0">
                                    <div class="desktop-cart cart-count" style="padding-bottom: 0px;">
                                        <div class="product-add-to-cart col-12">
                                            <ul class="cart-action col-12" style="padding-left: 0px;width: 100%;">
                                                <li class="select-option col-12" style="margin-bottom: 0px;">

                                                    <button class="btn p-0 m-auto text-white col-12" style="background: #FFA936 !important;padding:7px 28px !important;"><p><b class="text-white">অর্ডার করুন </b></p>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="product-action-wrapper phone-box d-flex-center first"
                            style="background:#3167EB;border-radius: 5px;padding: 10px 30px;margin-bottom: 10px;">
                            <div class="inner_div" style="margin: 0 auto;">
                                <a href="tel: 01776008473" style="color: white;display: flex; align-items:center"><i class="fa-regular fa-heart"></i> &nbsp;&nbsp; <span>ফেভারিট করে রাখুন</span></a>
                            </div>
                        </div>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/h-p5rIubBZ8?si=5ARMcL-V6t3MvNf5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



                        <!-- End Product Action Wrapper  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End .single-product-thumb -->

    <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
        <div class="container">
            <div class="product-desc-wrapper">
                <div class="row">
                    <div class="col-lg-12 mb--20">
                        <h5 class="title"> Short Description </h5>
                        <div class="single-desc pt-4">
                            <p>✓এটি দেখতে খুবই সুন্দর এবং আকর্ষণীয়, আপনি যা বলবেন সেটাই interesting -ওয়েতে repeat
                                করবে এবং পাশাপাশি এটি নাচবে ।<br />
                                ✓আপনার ব্যস্ত সময় সন্তানের খেলার সঙ্গী হবে এই পাখি, এটি আপনার বাচ্চার সাথে একাই কথা
                                বলবে।<br />
                                ✓এটি আপনার বাচ্চার কথা বলা এবং কান্না থামানোর জন্য উপকারী একটি খেলনা।<br />
                                ✓আপনার বাসায়, অফিস কিংবা প্রিয়জনকে উপহার হিসেবেও দারুন হতে পারে।<br />
                                ✓পাখির বিভিন্ন শব্দ এবং নিজে নিজে গান বাজবে যার ফলে আপনার বাচ্চা থাকবে অনেক হাসি
                                খুশি ও উৎফুল্ল।</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- woocommerce-tabs -->

    <!--      <div class="woocommerce-tabs wc-tabs-wrapper" style="background: #dbd3d39e;">-->
    <!--        <div class="container">  -->


    <!--            <div class="reviews-wrapper pt-4">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-6 mb--20">-->
    <!--                        <div class="axil-comment-area pro-desc-commnet-area pt-3">-->
    <!--                            <h5 class="title">(0) Relative Product</h5>-->
    <!--                            <ul class="comment-list">-->
    <!-- Start Single Comment  -->

    <!--                              -->
    <!-- End Single Comment  -->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!-- End .axil-commnet-area -->
    <!--                    </div>-->
    <!-- End .col -->
    <!--                    <div class="col-lg-6 mb--20">-->
    <!-- Start Comment Respond  -->
    <!--                        <div class="comment-respond pro-des-commend-respond mt--0">-->
    <!--                            <h5 class="title mb--10">Add a Review</h5>-->

    <!--                            <div class="rating-wrapper d-flex-center mb--10">-->

    <!--                             <div class="wrapper">-->
    <!--                                <div class="master">-->
    <!--                                    <div class="rating-component">-->
    <!--                                        <div class="status-msg">-->
    <!--                                            <label>-->
    <!--                                                <input class="rating_msg" type="hidden" name="rating_msg" value="" />-->
    <!--                                            </label>-->
    <!--                                        </div>-->
    <!--                                        <div class="stars-box">-->
    <!--                                            <i class="star fa fa-star" title="1 star" data-message="Poor" data-value="1"></i>-->
    <!--                                            <i class="star fa fa-star" title="2 stars" data-message="Too bad" data-value="2"></i>-->
    <!--                                            <i class="star fa fa-star" title="3 stars" data-message="Average quality" data-value="3"></i>-->
    <!--                                            <i class="star fa fa-star" title="4 stars" data-message="Nice" data-value="4"></i>-->
    <!--                                            <i class="star fa fa-star" title="5 stars" data-message="very good qality" data-value="5"></i>-->
    <!--                                        </div>-->
    <!--                                        <div class="starrate">-->
    <!--                                            <label>-->
    <!--                                                <input class="ratevalue" type="hidden" name="rate_value" value="" />-->
    <!--                                            </label>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="feedback-tags">-->
    <!--                                        <div class="tags-container" data-tag-set="1">-->
    <!--                                            <div class="question-tag">-->
    <!--                                                Why was your experience so bad?-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="tags-container" data-tag-set="2">-->
    <!--                                            <div class="question-tag">-->
    <!--                                                Why was your experience so bad?-->
    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                        <div class="tags-container" data-tag-set="3">-->
    <!--                                            <div class="question-tag">-->
    <!--                                                Why was your average rating experience ?-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="tags-container" data-tag-set="4">-->
    <!--                                            <div class="question-tag">-->
    <!--                                                Why was your experience good?-->
    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                        <div class="tags-container" data-tag-set="5">-->
    <!--                                            <div class="make-compliment">-->
    <!--                                                <div class="compliment-container">-->
    <!--                                                    Give a compliment-->
    <!--                                                    <i class="far fa-smile-wink"></i>-->
    <!--                                                </div>-->
    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                        <div class="tags-box">-->
    <!--                                            <form action="https://www.ebitanbd.com/product-reviews" method="post" id="review_form">-->
    <!--                                              	<input type="hidden" name="_token" value="xA5XPhc6jo2UGToimYaBmffGsSTveNDv9iYbi1yw">-->
    <!--                                              	<input type="hidden" name="product_id" value="159" />-->
    <!--                                              	<input type="hidden" name="review" id="review" value="" />-->

    <!--                                                <div class="row">-->
    <!--                                                    <div class="col-12">-->
    <!--                                                        <div class="form-group">-->
    <!--                                                            <label>Other Notes (optional)</label>-->
    <!--                                                            <textarea name="message" placeholder="Your Comment"></textarea>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->
    <!--                                                    <div class="col-lg-6 col-md-6 col-12 m-0">-->
    <!--                                                        <div class="form-group">-->
    <!--                                                            <label>Name <span class="require">*</span></label>-->
    <!--                                                            <input id="name" type="text" name="name"/>-->
    <!--                                                        </div>-->
    <!--                                                    </div>-->

    <!--                                                    <div class="col-lg-12 m-0">-->
    <!--                                                        <div class="button-box form-submit">-->
    <!--                                                            <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit Comment</button>-->
    <!--                                                        </div>-->
    <!--                                                      <div class="submited-box">-->
    <!--                                                          <div class="loader"></div>-->
    <!--                                                          <div class="success-message">-->
    <!--                                                              Thank you!-->
    <!--                                                          </div>-->
    <!--                                                      </div>-->
    <!--                                                    </div>-->
    <!--                                                </div>-->
    <!--                                            </form>-->
    <!--                                        </div>-->
    <!--                                    </div>-->


    <!--                                </div>-->
    <!--                            </div>-->

    <!--					</div>-->
    <!--                        </div>-->
    <!-- End Comment Respond  -->
    <!--                    </div>-->
    <!-- End .col -->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->


    <!--  second woocomerce -->

    <!--</div>-->
    <!-- End Shop Area  -->

    <!-- Start Recently Viewed Product Area  -->
    <div class="axil-product-area bg-color-white pt--10">
        <div class="container-fluid">
            <a class="viewall-right" href="https://www.ebitanbd.com/products-list"><span
                    class="title-highlighter view all highlighter-primary"> View All >></span></a>
            <div class="section-title-wrapper">
                <!--<span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>-->
                <h2 class="title">Related Product</h2>
            </div>
            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout" id="relative_data">
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
    <!-- End Recently Viewed Product Area  -->
</main>
@endsection
@section('scripts')
<script type="text/javascript">


    function calculate_total() {

        let charge = Number($(document).find("#selectCourier option:selected").attr("data-charge"));
        let prev_subtotal = Number($(document).find("input#subtotal").val());
        let final_total = prev_subtotal + charge;
        $(document).find("p.delivery_charge").text("" + charge);
        $(document).find("p.total").text("" + final_total);
        $(document).find("input#amount").val(final_total);
    }

    $(document).on('click', 'span.qtybtn', function () {
        var $button = $(this);

        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find('input').val(newVal);

        let url = $button.closest('div').attr('data-href');
        let segment = $button.closest('div').attr('data-segment');
        if (typeof url !== "undefined") {
            $.ajax({
                url: url,
                method: "GET",
                data: { quantity: newVal, segment: segment },
                success: function (res) {
                    if (res.success) {
                        toastr.success(res.msg);
                        $('div#cart-dropdown').html(res.html);
                        $(document).find('div.orderDetails').html(res.html2);
                        $(document).find('div.cart_other_details').html(res.html3);
                        /*if((res.segment) && (res.segment=='carts' || res.segment=='checkouts')){
                            //window.location.reload();
                        }*/
                    } else {
                        toastr.error(res.msg);
                    }
                    calculate_total();

                }
            });
        }

    });


    toastr.options = {
        "debug": false,
        "positionClass": "toast-bottom-right",
        "onclick": null,
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000
    }




</script>

<script type="text/javascript">

    $(document).on('submit', 'form#cart_submit', function (e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();

        $.ajax({
            url: url,
            method: method,
            data: data,
            success: function (res) {
                if (res.success) {
                    toastr.success(res.msg);
                    if (res.view) {
                        $(document).find('div#cart_section').html(res.view);
                    }

                    if (res.item) {
                        $(document).find('span.cart-count').text(res.item);
                    }

                    if (res.url) {
                        document.location.href = res.url;
                    } else {
                        window.location.reload();
                    }

                } else {
                    toastr.error(res.msg);
                }
            },
            error: function (response) {
                $.each(response.responseJSON.errors, function (field_name, error) {
                    toastr.error(error);
                })
            }
        });

    });

    $('li.size').click(function () {

        $('li.size').removeClass('active');

        $(this).addClass('active');

    });


    $('li.color').click(function () {

        $('li.color').removeClass('active');
        $(this).addClass('active');

    });

    $(document).ready(function () {
        getRelatedProduct();

        function getRelatedProduct() {
            let url = 'https://www.ebitanbd.com/relative-product/159';
            $.ajax({
                url: url,
                method: 'GET',
                data: {},
                dataType: "JSON",
                success: function (res) {

                    if (res.success) {
                        $('div#relative_data').html(res.html);
                    }

                }
            });
        }

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sizes .size').on('click', function () {
            $('#sizes .size').removeClass('active');
            $(this).addClass('active');
            var value = $(this).attr('value');
            $("#size-value").val(value);
            $("#size_value1").val(value);

        })
    });
    $(".rating-component .star").on("mouseover", function () {
        var onStar = parseInt($(this).data("value"), 10); //
        $(this).parent().children("i.star").each(function (e) {
            if (e < onStar) {
                $(this).addClass("hover");
            } else {
                $(this).removeClass("hover");
            }
        });
    }).on("mouseout", function () {
        $(this).parent().children("i.star").each(function (e) {
            $(this).removeClass("hover");
        });
    });

    $(".rating-component .stars-box .star").on("click", function () {
        var onStar = parseInt($(this).data("value"), 10);
        var stars = $(this).parent().children("i.star");
        var ratingMessage = $(this).data("message");

        var msg = "";
        if (onStar > 1) {
            msg = onStar;
        } else {
            msg = onStar;
        }
        $(document).find('#review').val(onStar);
        $('.rating-component .starrate .ratevalue').val(msg);



        $(".fa-smile-wink").show();

        $(".button-box .done").show();

        if (onStar === 5) {
            $(".button-box .done").removeAttr("disabled");
        } else {
            $(".button-box .done").attr("disabled", "true");
        }

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass("selected");
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass("selected");
        }

        $(".status-msg .rating_msg").val(ratingMessage);
        $(".status-msg").html(ratingMslick - slideressage);
        $("[data-tag-set]").hide();
        $("[data-tag-set=" + onStar + "]").show();
    });

    $(".feedback-tags  ").on("click", function () {
        var choosedTagsLength = $(this).parent("div.tags-box").find("input").length;
        choosedTagsLength = choosedTagsLength + 1;

        if ($(this).hasClass("choosed")) {
            $(this).removeClass("choosed");
            choosedTagsLength = choosedTagsLength - 2;
        } else {
            $(this).addClass("choosed");
            $(".button-box .done").removeAttr("disabled");
        }

        console.log(choosedTagsLength);

        if (choosedTagsLength <= 0) {
            $(".button-box .done").attr("enabled", "false");
        }
    });



    $(".compliment-container .fa-smile-wink").on("click", function () {
        $(this).fadeOut("slow", function () {
            $(".list-of-compliment").fadeIn();
        });
    });


    $(".done").on("click", function () {
        $(".rating-component").hide();
        $(".feedback-tags").hide();
        $(".button-box").hide();
        $(".submited-box").show();
        $(".submited-box .loader").show();

        setTimeout(function () {
            $(".submited-box .loader").hide();
            $(".submited-box .success-message").show();
        }, 1500);
    });

</script>
@endsection
