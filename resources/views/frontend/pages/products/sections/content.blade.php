<div class="page-content">
    <div class="container">
        <div class="row">
         @if (!empty($products))
         
               @foreach($products as $item)
                    <div class="product product-7 text-center col-6 col-md-4 col-lg-3">
                        @if ($item->total_qty == 0)
                        <span class="product-label label-out">Out of Stock</span>
                        @endif
                        <figure class="product-media">
                            <a href="{{route('product-extended',$item->id)}}">
                                <img src="{{ asset('storProduct_Imagemage/'.$item->image2) }}" alt="Product image"
                                    class="product-image">
                                <img src="{{ asset('storage/Product_image/'.$item->image3) }}" alt="Product image"
                                    class="product-image-hover">
                            </a>

                            {{-- <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical --> --}}

                            <div class="product-action">
                                <a href="{{route('product-extended',$item->id)}}" class="btn-product"><span>Shop Now</span></a>
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
                                    <div class="ratings-val" style="width: {{ ($item->reviews->avg('rating')*20 ) ?? '0'}}%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( {{ count($item->reviews) }} Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="{{route('product-extended',$item->id)}}" class="active">
                                    <img src="{{ asset('storage/Product_image/'.$item->image2) }}" alt="product desc">
                                </a>
                                <a href="{{route('product-extended',$item->id)}}">
                                    <img src="{{ asset('storProduct_Imagemage/'.$item->image3) }}" alt="product desc">
                                </a>
                                <a href="{{route('product-extended',$item->id)}}">
                                    <img src="{{ asset('storProduct_Imagemage/'.$item->image4) }}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->Product_Image
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
