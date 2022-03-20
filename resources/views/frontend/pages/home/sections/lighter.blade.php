@php
$random_1 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_2 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_3 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_4 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
@endphp
<div class="pt-3 pb-3">
    <div class="container">
        <div class="banner-group">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="banner banner-overlay banner-lg">
                        <a href="{{ route('category',$random_1->category->id) }}">
                            <img src="{{ asset('storage/Product_image/'.$random_1->image1) }}" alt="Banner"
                                style="width: 376px; height:500px; object-fit: cover">
                        </a>

                        <div class="banner-content banner-content-bottom">
                            <h4 class="banner-subtitle text-white"><a
                                    href="{{ route('category',$random_1->category->id) }}">Clearance</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a
                                    href="{{ route('category',$random_1->category->id) }}">{{ $random_1->category->title }}</a>
                            </h3>
                            <!-- End .banner-title -->
                            <div class="banner-text text-white"><a
                                    href="{{ route('category',$random_1->category->id) }}">from
                                    ${{ $random_1->price }}</a></div>
                            <!-- End .banner-text -->
                            <a href="{{ route('category',$random_1->category->id) }}"
                                class="btn btn-outline-white banner-link">Discover Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->

                <div class="col-sm-6 col-lg-4 order-lg-last">
                    <div class="banner banner-overlay banner-lg">
                        <a href="{{ route('category',$random_4->category->id) }}">
                            <img src="{{ asset('storage/Product_image/'.$random_4->image4) }}" alt="Banner"
                                style="width: 376px; height:500px; object-fit: cover">
                        </a>

                        <div class="banner-content banner-content-top">
                            <h4 class="banner-subtitle text-white"><a
                                    href="{{ route('category',$random_4->category->id) }}">On Sale</a></h4>
                            <!-- End .banner-subtitle -->
                            <h3 class="banner-title text-white"><a
                                    href="{{ route('category',$random_4->category->id) }}">{{ $random_4->category->title }}</a>
                            </h3>
                            <!-- End .banner-title -->
                            <div class="banner-text text-white"><a
                                    href="{{ route('category',$random_4->category->id) }}">from
                                    ${{ $random_4->price }}</a></div>
                            <!-- End .banner-text -->
                            <a href="{{ route('category',$random_4->category->id) }}"
                                class="btn btn-outline-white banner-link">Discover Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->

                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="banner banner-overlay">
                                <a href="{{ route('category',$random_2->category->id) }}">
                                    <img src="{{ asset('storage/Product_image/'.$random_2->image2) }}" alt="Banner"
                                        style="width: 376px; height:240px; object-fit: cover">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white"><a
                                            href="{{ route('category',$random_2->category->id) }}">New Arrivals</a></h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a
                                            href="{{ route('category',$random_2->category->id) }}">{{ $random_2->category->title }}</a>
                                    </h3><!-- End .banner-title -->
                                    <a href="{{ route('category',$random_2->category->id) }}"
                                        class="btn btn-outline-white banner-link">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 col-lg-12 -->

                        <div class="col-sm-6 col-lg-12">
                            <div class="banner banner-overlay">
                                <a href="{{ route('category',$random_3->category->id) }}">
                                    <img src="{{ asset('storage/Product_image/'.$random_3->image3) }}" alt="Banner"
                                        style="width: 376px; height:240px; object-fit: cover">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white"><a
                                            href="{{ route('category',$random_3->category->id) }}">New Arrivals</a></h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a
                                            href="{{ route('category',$random_3->category->id) }}">{{ $random_3->category->title }}</a>
                                    </h3>
                                    <!-- End .banner-title -->
                                    <a href="{{ route('category',$random_3->category->id) }}"
                                        class="btn btn-outline-white banner-link">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 col-lg-12 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .banner-group -->

        <div class="owl-carousel mt-4 mb-3 owl-simple" data-toggle="owl" data-owl-options='{
                   "nav": false, 
                   "dots": false,
                   "margin": 30,
                   "loop": false,
                   "responsive": {
                       "0": {
                           "items":2
                       },
                       "420": {
                           "items":3
                       },
                       "600": {
                           "items":4
                       },
                       "900": {
                           "items":5
                       },
                       "1024": {
                           "items":6
                       }
                   }
               }'>
            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/1.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/2.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/3.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/4.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/5.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/6.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="asset/frontend/assets/images/brands/7.png" alt="Brand Name">
            </a>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
</div><!-- End .bg-lighter -->

<div class="bg-lighter pt-6">
    <div class="container">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Trending Now</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" id="trending-women-link" data-toggle="tab"
                            href="#trending-women-tab" role="tab" aria-controls="trending-women-tab"
                            aria-selected="true">Women's Clothing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trending-men-link" data-toggle="tab"
                            href="#trending-men-tab" role="tab" aria-controls="trending-men-tab"
                            aria-selected="false">Men's Clothing</a>
                    </li> --}}
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="trending-women-tab" role="tabpanel"
                aria-labelledby="trending-women-link">
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
                                   "dots": false
                               }
                           }
                       }'>
                    @foreach($product as $item)
                    <div class="product product-7 text-center">
                        <figure class="product-media" style="width:276.2px;height:375.9px;">
                            <a href="{{route('product-extended',$item->id)}}">
                                <img src="{{ asset('storage/Product_image/'.$item->image2) }}" alt="Product image"
                                    class="product-image">
                                <img src="{{ asset('storage/Product_image/'.$item->image3) }}" alt="Product image"
                                    class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a
                                    href="{{route('product-extended',$item->id)}}">{{$item->name}}</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                {{$item->price}}
                            </div><!-- End .product-price -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="{{ asset('storage/Product_image/'.$item->image2) }}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('storage/Product_image/'.$item->image3) }}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('storage/Product_image/'.$item->image4) }}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel" aria-labelledby="trending-men-link">
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
                                   "dots": false
                               }
                           }
                       }'>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->
</div>
