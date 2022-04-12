@php
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
$reviews = App\Models\Review::orderBy('id','desc')->where('product_id',$product->id)->get();
@endphp
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
                style="background-image: url('{{ asset('storage/Product_image/'.$product->image4) }}'); height:500px;
            object-fit: cover">
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
            <h3>Reviews ({{ count($reviews) }})</h3>



            <div class="review">
                @if (count($reviews) != 0)
                @foreach ($reviews as $review)
                @php
                    $review_user_rating = App\Models\Review::toBase()->where('user_id',$review->user_id)->pluck('rating')->first();
                    $review_user_rating_p = (100/5)*$review_user_rating;
                @endphp
                <div class="row no-gutters">
                    <div class="col-auto">
                        <h4>{{ $review->user->name }}</h4>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: {{ $review_user_rating_p  }}%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                        </div><!-- End .rating-container -->
                        <span class="review-date">{!! date('d/m/Y', strtotime($review->created_at)) !!}</span>
                    </div><!-- End .col -->
                    <div class="col">
                        <div class="review-content">
                            <p>{{ $review->review }}</p>
                        </div><!-- End .review-content -->
                        {{-- <div class="review-action">
                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                            </div><!-- End .review-action --> --}}
                    </div><!-- End .col-auto -->
                </div><!-- End .row -->
                @endforeach
                @else
                <h4>No Reviews Available</h4>
                @endif

            </div><!-- End .review -->
            @if (!auth()->guest())
                @php
                $review_user = App\Models\Review::toBase()->where([['product_id',$product->id],['user_id',Auth::user()->id]])->count();
                @endphp
                @if ($review_user == 0)
                <div class="review">
                    <div class="col-sm-12">
                        <h3 class="title mb-1">Your Review About This Product</h3><!-- End .title mb-2 -->
                        <form action="{{ route('review.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-acc-field required">
                                        <p>Rating</p>
                                        {{-- <label for="star">Rating</label> --}}
                                        <div class="stars">
                                            <input class="star star-5" id="star-5" type="radio" name="rating" value="5" />
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="rating" value="4" />
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="rating" value="3" />
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="rating" value="2" />
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="rating" value="1" />
                                            <label class="star star-1" for="star-1"></label>
                                        </div>
                                        @error('rating')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="col-lg-12">
                                    <div class="single-acc-field">
                                        <label for="msg">Review</label>
                                        <textarea class="form-control @error('review') is-invalid @enderror" name="review"
                                            id="review" name="review" value="{{old('review')}}" rows="4"></textarea>
                                        @error('review')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">Remember me</label>
                                        </div> --}}
                            <div class="single-acc-field">
                                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                    <span>SUBMIT</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                            </div>
                        </form>

                    </div><!-- End .col-lg-6 -->
                </div><!-- End .review -->
                @endif
            @endif
        </div><!-- End .container -->
    </div><!-- End .reviews -->
</div><!-- .End .tab-pane -->
</div><!-- End .tab-content -->
</div><!-- End .product-details-tab -->
@push('styles')

@endpush
