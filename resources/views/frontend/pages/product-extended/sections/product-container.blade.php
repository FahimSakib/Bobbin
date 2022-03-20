<div class="container">
    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
        @foreach ($prducts_random as $product)
        <div class="product product-7">
            <figure class="product-media">
                <span class="product-label label-new">New</span>
                <a href="{{route('product-extended',$product->id)}}">
                    <img src="{{ asset('storage/Product_image/'.$product->image1) }}" alt="Product image"
                        class="product-image">
                </a>

                <div class="product-action-vertical">
                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                            view</span></a>
                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                </div><!-- End .product-action-vertical -->

                <div class="product-action">
                    <a href="{{route('product-extended',$product->id)}}" class="btn-product btn-cart"><span>add to
                            cart</span></a>
                </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
                <div class="product-cat">
                    <a href="{{ route('category',$product->category_id) }}">{{ $product->category->title }}</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="{{route('product-extended',$product->id)}}">{{ $product->name }}</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">
                    <span class="out-price">{{ $product->price }}</span>
                </div><!-- End .product-price -->
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">( 6 Reviews )</span>
                </div><!-- End .rating-container -->
            </div><!-- End .product-body -->
        </div><!-- End .product -->
        @endforeach
    </div><!-- End .owl-carousel -->
</div><!-- End .container -->
</div><!-- End .page-content -->
