@if(session('success'))
{{session('success')}}
@endif
<div class="page-content">
    <div class="container">
        <div class="product-details-top mb-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery">
                        <figure class="product-main-image">
                            <img id="product-zoom" src="{{ asset('storage/Product_image/'.$product->image1) }}"
                                data-zoom-image="{{ asset('storage/Product_image/'.$product->image1) }}"
                                alt="product image">

                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                <i class="icon-arrows"></i>
                            </a>
                        </figure><!-- End .product-main-image -->

                        <div id="product-zoom-gallery" class="product-image-gallery">
                            <a class="product-gallery-item" href="#"
                                data-image="{{ asset('storage/Product_image/'.$product->image4) }}"
                                data-zoom-image="{{ asset('storage/Product_image/'.$product->image4) }}">
                                <img src="{{ asset('storage/Product_image/'.$product->image4) }}" alt="product side">
                            </a>
                            <a class="product-gallery-item" href="#"
                                data-image="{{ asset('storage/Product_image/'.$product->image3) }}"
                                data-zoom-image="{{ asset('storage/Product_image/'.$product->image3) }}">
                                <img src="{{ asset('storage/Product_image/'.$product->image3) }}" alt="product side">
                            </a>
                            <a class="product-gallery-item" href="#"
                                data-image="{{ asset('storage/Product_image/'.$product->image2) }}"
                                data-zoom-image="{{ asset('storage/Product_image/'.$product->image2) }}">
                                <img src="{{ asset('storage/Product_image/'.$product->image2) }}" alt="product side">
                            </a>
                            <a class="product-gallery-item" href="#"
                                data-image="{{ asset('storage/Product_image/'.$product->image1) }}"
                                data-zoom-image="{{ asset('storage/Product_image/'.$product->image1) }}">
                                <img src="{{ asset('storage/Product_image/'.$product->image1) }}" alt="product side">
                            </a>
                        </div><!-- End .product-image-gallery -->
                    </div><!-- End .product-gallery -->
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->

                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                        </div><!-- End .rating-container -->

                        <div class="product-price">
                            {{$product->price}}
                        </div><!-- End .product-price -->

                        <div class="product-content">
                            <p align="justify">{{$product->short_description}}</p>
                        </div><!-- End .product-content -->
                        @if ($product->total_qty != 0)
                        <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                            <div class="details-filter-row details-row-size">
                                <label for="color">Colors:</label>
                                <div class="select-custom">
                                    <select name="color" id="color" class="form-control" required>
                                        <option selected="selected" value="">Select a color</option>
                                        @foreach ($product->colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->title }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .details-filter-row -->
                            <div class="details-filter-row details-row-size">
                                <label for="size">Size:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control" required>
                                        <option selected="selected" value="">Select a size</option>
                                        @foreach ($product->sizes as $size)
                                        @if ($size->pivot->qty != 0)
                                        <option value="{{ $size->id }}" data-value="{{ $size->pivot->qty }}">
                                            {{ $size->title }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div><!-- End .select-custom -->

                                <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                            </div><!-- End .details-filter-row -->

                            {{-- add to cart --}}
                            {{-- <form action="{{route('cart.store')}}" method="POST">
                            @csrf --}}
                            {{-- <input type="hidden" name="color" value="{{document.getElementsId("color")}}">
                            <input type="hidden" name="size" value="{{document.getElementsById("size")}}"> --}}
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <div class="details-filter-row details-row-size">
                                <label for="qty">Qty:</label>
                                <div class="product-details-quantity">
                                    <input type="number" name="quantity" id="qty" class="form-control" value="1" min="1"
                                        step="1" data-decimals="0" onkeydown="return false" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->
                            <input type="hidden" name="pivot-qty" id="pivot-qty">

                            <div class="product-details-action">
                                <button type="submit" class="btn-product btn-cart"><span>add to cart </span></button>
                        </form>
                        @else
                        <div class="product-details-action">
                            <div>
                                <button type="button" class="btn-product btn btn-danger" disabled>Out of Stock</button>
                            </div>
                            @endif
                            <div class="details-action-wrapper">
                                <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to
                                        Wishlist</span></a>
                                <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to
                                        Compare</span></a>
                            </div><!-- End .details-action-wrapper -->
                        </div><!-- End .product-details-action -->

                        <div class="product-details-footer">
                            <div class="product-cat">
                                <span>Category:</span>
                                <a
                                    href="{{ route('category',$product->category_id) }}">{{ $product->category->title }}</a>
                            </div><!-- End .product-cat -->

                            <div class="social-icons social-icons-sm">
                                <span class="social-label">Share:</span>
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                        class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                        class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                        class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                        class="icon-pinterest"></i></a>
                            </div>
                        </div><!-- End .product-details-footer -->
                    </div><!-- End .product-details -->
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .product-details-top -->
    </div><!-- End .container -->

    <div class="product-details-tab product-details-extended">
        <div class="container">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                        role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab"
                        aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab"
                        role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab"
                        aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                </li>
            </ul>
        </div><!-- End .container -->
        @push('scripts')
        <script>
            $(document).ready(function () {
                $('#size').on('change', function () {
                    let max = $(this).find(':selected').data('value');
                    $("#qty").attr({
                        "max": max
                    });
                    $("#pivot-qty").val(max);
                });
            });

        </script>
        @endpush
