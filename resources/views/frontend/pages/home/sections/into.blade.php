<div class="intro-section">
    <div class="intro-section-slider">
        <div class="container">
            <div class="intro-slider-container slider-container-ratio mb-0">
                <div class="intro-slider owl-carousel owl-simple owl-light" data-toggle="owl"
                    data-owl-options='{
                           "nav": false, 
                           "dots": true,
                           "responsive": {
                               "1200": {
                                   "nav": true,
                                   "dots": false
                               }
                           }
                       }'>
                       @foreach($slider as $item)
                    <div class="intro-slide">
                        <figure class="slide-image">
                            <picture>
                                <source media="(max-width: 480px)"
                                    srcset="{{ asset('storage/Banner_image/'.$item->image) }}">
                                <img src="{{ asset('storage/Banner_image/'.$item->image) }}"  alt="Image Desc">
                            </picture>
                        </figure><!-- End .slide-image -->

                        <div class="intro-content">
                            <h3 class="intro-subtitle">{{$item->title}}</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">{{$item->sub_title}}</h1>
                            <!-- End .intro-title -->

                            <div class="intro-text text-white">{{$item->offer}}</div><!-- End .intro-text -->

                            {{-- <a href="category.html" class="btn btn-primary">
                                <span>DISCOVER NOW</span>
                            </a> --}}
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                        @endforeach
                    {{-- <div class="intro-slide">
                        <figure class="slide-image">
                            <picture>
                                <source media="(max-width: 480px)"
                                    srcset="asset/frontend/assets/images/demos/demo-9/slider/slide-2-480w.jpg">
                                <img src="asset/frontend/assets/images/demos/demo-9/slider/slide-2.jpg" alt="Image Desc">
                            </picture>
                        </figure><!-- End .slide-image -->

                        <div class="intro-content">
                            <h3 class="intro-subtitle">New Collection</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Men’s <br>Coats & Jackets</h1>
                            <!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>DISCOVER NOW</span>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide --> --}}

                   
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->
        </div><!-- End .container -->
    </div><!-- End .intro-section-slider -->

    <div class="icon-boxes-container pt-0 pb-0">
        <div class="container">
            <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                       "nav": false, 
                       "dots": false,
                       "margin": 30,
                       "loop": false,
                       "autoplay": true,
                       "autoplayTimeout": 8000,
                       "responsive": {
                           "0": {
                               "items":1
                           },
                           "480": {
                               "items":2
                           },
                           "992": {
                               "items":3
                           },
                           "1200": {
                               "items":4
                           }
                       }
                   }'>
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-rocket"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                        <p>Orders $50 or more</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->

                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-rotate-left"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                        <p>Within 30 days</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->

                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-info-circle"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                        <p>When you sign up</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->

                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                        <p>24/7 amazing services</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->
</div><!-- End .intro-section -->