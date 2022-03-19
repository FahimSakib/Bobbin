@foreach ($categories as $category)
@php
    $products = App\Models\Product::all()->where('category_id',$category->id) 
@endphp
@php
     $single_product = App\Models\Product::where('category_id',$category->id)->inRandomOrder()->first()
@endphp
<div class="container featured mt-4 pb-2">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">{{ $category->title }}</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a href="{{ route('category',$category->id) }}">Show All</a>
                </li>
            </ul>
        </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="row">
        <div class="col-lg-3" >
            <div class="banner banner-overlay product-banner">
                <a href="{{route('product-extended',$single_product->id)}}">
                    <img src="{{ asset('storage/Product_image/'.$single_product->image1) }}" alt="banner image" style="height: 530px;width:376">
                </a>
                <div class="banner-content">
                    <div class="banner-top">
                        <div class="banner-title text-white text-center">
                            <i class="la la-star-o"></i>
                            <h3 class="text-white">Our Experts<br>Recommend</h3>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="product-cat">
                            <h4 class="text-white">Sale</h4>
                        </div>
                        <div class="product-price">
                            <h4 class="text-white">${{ $single_product->price }}</h4>
                        </div>
                        <div class="product-txt">
                            <p class="text-white">{{ $single_product->name }}</p>
                        </div>
                        <a href="{{route('product-extended',$single_product->id)}}" class="btn btn-outline-white banner-link">Shop Now</a>
                    </div>
                </div>
            </div><!-- End .banner banner-overlay -->
        </div><!-- End .col-lg-3 -->

        <div class="col-lg-9">
            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel"
                    aria-labelledby="featured-women-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                   "nav": false, 
                                   "dots": true,
                                   "margin": 20,
                                   "loop": false,
                                   "responsive": {
                                       "0": {
                                           "items":2
                                       },
                                       "480": {
                                           "items":2
                                       },
                                       "768": {
                                           "items":3
                                       },
                                       "992": {
                                           "items":3,
                                           "nav": true,
                                           "dots": false
                                       }
                                   }
                               }'>
                               @foreach ($products as $product)
                        <div class="product product-7">
                            <figure class="product-media">
                                <a href="{{route('product-extended',$product->id)}}">
                                    <img src="{{ asset('storage/Product_image/'.$product->image1) }}"
                                        alt="Product image" class="product-image">
                                    <img src="{{ asset('storage/Product_image/'.$product->image2) }}"
                                        alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="{{route('product-extended',$product->id)}}">{{ $product->name }}</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $12.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .col-lg-9 -->
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="container">
    <hr class="mt-3 mb-4">
</div><!-- End .container -->
@endforeach
{{-- <div class="container pb-2">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Bags & Accessories</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="bags-women-link" data-toggle="tab" href="#bags-women-tab" role="tab"
                        aria-controls="bags-women-tab" aria-selected="true">Women's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bags-men-link" data-toggle="tab" href="#bags-men-tab" role="tab"
                        aria-controls="bags-men-tab" aria-selected="false">Men's</a>
                </li>
            </ul>
        </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="row">
        <div class="col-lg-3">
            <div class="banner banner-overlay product-banner">
                <a href="#">
                    <img src="asset/frontend/assets/images/demos/demo-9/banners/banner-6.jpg" alt="banner image">
                </a>
                <div class="banner-content">
                    <div class="banner-top">
                        <div class="banner-title text-white text-center">
                            <i class="la la-star-o"></i>
                            <h3 class="text-white">Our Experts<br>Recommend</h3>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="product-cat">
                            <h4 class="text-white">Sale</h4>
                        </div>
                        <div class="product-price">
                            <h4 class="text-white">$129.99</h4>
                        </div>
                        <div class="product-txt">
                            <p class="text-white">Cross Body Bag</p>
                        </div>
                        <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                    </div>
                </div>
            </div><!-- End .banner banner-overlay -->
        </div><!-- End .col-lg-3 -->

        <div class="col-lg-9">
            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="bags-women-tab" role="tabpanel"
                    aria-labelledby="bags-women-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                   "nav": false, 
                                   "dots": true,
                                   "margin": 20,
                                   "loop": false,
                                   "responsive": {
                                       "0": {
                                           "items":2
                                       },
                                       "480": {
                                           "items":2
                                       },
                                       "768": {
                                           "items":3
                                       },
                                       "1200": {
                                           "items":3,
                                           "nav": true,
                                           "dots": false
                                       }
                                   }
                               }'>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-8-1.jpg"
                                        alt="Product image" class="product-image">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-8-2.jpg"
                                        alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Small shoulder bag</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $14.99
                                </div><!-- End .product-price -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-9-1.jpg"
                                        alt="Product image" class="product-image">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-9-2.jpg"
                                        alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Loafers</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $9.99
                                </div><!-- End .product-price -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 1 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-10-1.jpg"
                                        alt="Product image" class="product-image">
                                    <img src="asset/frontend/assets/images/demos/demo-9/products/product-10-2.jpg"
                                        alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                            wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $14.99
                                </div><!-- End .product-price -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 3 Reviews )</span>
                                </div><!-- End .rating-container -->
                                <div class="product-nav product-nav-thumbs">
                                    <a href="#" class="active">
                                        <img src="asset/frontend/assets/images/demos/demo-9/products/product-10-thumb.jpg"
                                            alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="asset/frontend/assets/images/demos/demo-9/products/product-10-2-thumb.jpg"
                                            alt="product desc">
                                    </a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="bags-men-tab" role="tabpanel" aria-labelledby="bags-men-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                   "nav": false, 
                                   "dots": true,
                                   "margin": 20,
                                   "loop": false,
                                   "responsive": {
                                       "0": {
                                           "items":2
                                       },
                                       "480": {
                                           "items":2
                                       },
                                       "768": {
                                           "items":3
                                       },
                                       "992": {
                                           "items":4
                                       },
                                       "1200": {
                                           "items":4,
                                           "nav": true,
                                           "dots": false
                                       }
                                   }
                               }'>
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div>
    </div>
</div><!-- End .container -->

<div class="container">
    <hr class="mt-3 mt-xl-1 mb-0">
</div><!-- End .container --> --}}
