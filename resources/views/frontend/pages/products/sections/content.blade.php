<div class="page-content">
    <div class="container">
        <div class="row">
            @if (!empty($products))
            @foreach ($products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-3">
                    <figure class="product-media">
                        @if ($product->total_qty == 0)
                        <span class="product-label label-out">Out of Stock</span>
                        @endif
                        <a href="{{route('product-extended',$product->id)}}">
                            <img src="{{ asset('storage/Product_image/'.$product->image1) }}" alt="Product image"
                                class="product-image">
                        </a>

                        {{-- <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick
                                    view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical --> --}}
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-action">
                            <a href="{{route('product-extended',$product->id)}}" class="btn-product btn-cart"><span>add
                                    to cart</span></a>
                        </div><!-- End .product-action -->
                        <div class="product-cat">
                            <a href="{{ route('category',$product->category_id) }}">{{ $product->category->title }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a
                                href="{{route('product-extended',$product->id)}}">{{ $product->name }}</a></h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">{{ $product->price }}</span>
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->

                    <div class="product-footer">
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-thumbs">
                            <a href="{{route('product-extended',$product->id)}}" class="active">
                                <img src="{{ asset('storage/Product_image/'.$product->image2) }}" alt="product desc">
                            </a>
                            <a href="{{route('product-extended',$product->id)}}">
                                <img src="{{ asset('storage/Product_image/'.$product->image3) }}" alt="product desc">
                            </a>

                            <a href="{{route('product-extended',$product->id)}}">
                                <img src="{{ asset('storage/Product_image/'.$product->image4) }}" alt="product desc">
                            </a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-footer -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-lg-3 -->
            @endforeach
            @else
            <h2 class="title text-center mb-3">Sorry! No products found!</h2>
            @endif

        </div><!-- End .row -->

        <nav aria-label="Page navigation">
            {{ $products->links('vendor.pagination.custom') }}
        </nav>
    </div><!-- End .container -->

</div>
