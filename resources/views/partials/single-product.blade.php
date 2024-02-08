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
                <img src="{{ asset($product->thumbnails) }}" class="product_img" alt="{{ $product->product_name }}">
            </a>
            <div class="label-block label-right">
                <div class="product-badget" style="background: #FFA936;">{{ $product->discount }} {{ $product->discount_type == 'flat' ? 'tk off' : '% off' }}</div>
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
                <h5 class="title text-start"><a href="{{ route('frontend.product.details', $product->slug) }}">{{ $product->product_name }}</a></h5>
                <div class="product-price-variant text-start">
                    <span class="price current-price text-success">৳ {{ $product->whole_sale_price }}</span>
                    <span class="price old-price text-danger">৳ {{ $product->regular_price }}</span>
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
                            <button type="submit" class="btn p-0 button m-auto text-light col-12" style="background: #FFA936 !important;">
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
