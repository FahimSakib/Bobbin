<div class="tab-content">
    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
        <div class="product-desc-content">
            <div class="product-desc-row bg-image"
                style="background-image: url('{{ asset('storage/Product_image/'.$product->image2) }}'); height:500px; object-fit: cover">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-sm-6 col-lg-6 bg-op">
                            <h2 class="text-white">Product Information</h2>
                            <p class="text-white" align="justify">{{$product->short_description}}</p>
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .product-desc-row -->

            {{-- <div class="product-desc-row bg-image text-white"
                style="background-image: url('{{ asset('storage/Product_image/'.$product->image4) }}'); height:500px; object-fit: cover">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Design</h2>
                            <p class="text-white">The perfect choice for the summer months. These wedges are perfect for
                                holidays and home, with the thick cross-over strap design and heel strap with an
                                adjustable buckle fastening. Featuring chunky soles with an espadrille and cork-style
                                wedge. </p>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <h2>Fabric & care</h2>
                            <p class="text-white">As part of our Forever Comfort collection, these wedges have ultimate
                                cushioning with soft padding and flexi soles. Perfect for strolls into the old town on
                                holiday or a casual wander into the village.</p>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-3 -->

                    <img src="asset/frontend/assets/images/products/single/extended/sign.png" alt=""
                        class="ml-auto mr-auto">
                </div><!-- End .container -->
            </div><!-- End .product-desc-row --> --}}
        </div><!-- End .product-desc-content -->
    </div><!-- .End .tab-pane -->
    <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
        <div class="product-desc-content">
            <div class="container">
                <h3>Information</h3>
                <p align="justify">{{$product->description}}</p>
                <h3 class="mt-2">Sizes</h3>
                <ul>
                    @foreach ($product->sizes as $size)
                    @if ($size->pivot->qty != 0)
                    <li>{{ $size->title }}</li>
                    @endif
                    @endforeach
                </ul>
            </div><!-- End .container -->
        </div><!-- End .product-desc-content -->
    </div><!-- .End .tab-pane -->
    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
        <div class="product-desc-content">
            <div class="container">
                <h3>Delivery & returns</h3>
                <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer,
                    please view our <a href="#">Delivery information</a><br>
                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a
                    month of receipt. For full details of how to make a return, please view our <a href="#">Returns
                        information</a></p>
            </div><!-- End .container -->
        </div><!-- End .product-desc-content -->
    </div><!-- .End .tab-pane -->
    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
        <div class="reviews">
            <div class="container">
                <h3>Reviews (2)</h3>
                <div class="review">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <h4><a href="#">Samanta J.</a></h4>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <span class="review-date">6 days ago</span>
                        </div><!-- End .col -->
                        <div class="col">
                            <h4>Good, perfect size</h4>

                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores
                                    assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis
                                    commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae
                                    voluptas!</p>
                            </div><!-- End .review-content -->

                            <div class="review-action">
                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                            </div><!-- End .review-action -->
                        </div><!-- End .col-auto -->
                    </div><!-- End .row -->
                </div><!-- End .review -->

                <div class="review">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <h4><a href="#">John Doe</a></h4>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <span class="review-date">5 days ago</span>
                        </div><!-- End .col -->
                        <div class="col">
                            <h4>Very good</h4>

                            <div class="review-content">
                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium
                                    iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum
                                    repellendus, blanditiis perspiciatis beatae!</p>
                            </div><!-- End .review-content -->

                            <div class="review-action">
                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                            </div><!-- End .review-action -->
                        </div><!-- End .col-auto -->
                    </div><!-- End .row -->
                </div><!-- End .review -->
            </div><!-- End .container -->
        </div><!-- End .reviews -->
    </div><!-- .End .tab-pane -->
</div><!-- End .tab-content -->
</div><!-- End .product-details-tab -->
