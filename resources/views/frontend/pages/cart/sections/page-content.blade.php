@php
$carts = Gloudemans\Shoppingcart\Facades\Cart::content();
$order_id = uniqid();
$data = [];
@endphp
<div class="page-content">
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            @php
                            $tp=0;
                            @endphp
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{route('product-extended',$cart->id)}}">
                                                <img src="{{ asset('storage/Product_image/'.$cart->options->image)}}"
                                                    alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="{{route('product-extended',$cart->id)}}">{{$cart->name}}</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">{{$cart->price}}</td>
                                @php
                                $size = App\Models\Size::find($cart->options->size);
                                $color = App\Models\Color::find($cart->options->color);
                                @endphp
                                <td class="price-col">{{$size->title}}</td>
                                <td class="price-col">{{$color->title}}</td>
                                <td class="quantity-col">{{$cart->qty}}</td>
                                @php
                                $tp=$cart->price*$cart->qty;

                                $row = [];

                                $row  ['order_id']   = $order_id;
                                $row  ['user_id']    = Auth::user()->id;
                                $row  ['product_id'] = $cart->id;
                                $row  ['size_id']    = $cart->options->size;
                                $row  ['color_id']   = $cart->options->color;
                                $row  ['qty']        = $cart->qty;
                                $row  ['price']      = $tp;
                                $row  ['pivot_qty']  = $cart->options->pivot_qty;
                                $row  ['created_at'] = date('Y-m-d H:i:s');
                                $data[]              = $row;
                                @endphp
                                <td class="total-col">{{$tp}}</td>
                                <form action="{{route('cart.remove')}}" method="POST">
                                    @csrf
                                    <input hidden name="rowId" value="{{$cart->rowId}}">
                                    <td class="remove-col"><button type="submit" class="btn-remove"><i
                                                class="icon-close"></i></button>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table><!-- End .table table-wishlist -->
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-subtotal">
                                    <td>Subtotal:</td>
                                    <td><?php echo Cart::subtotal(); ?></td>
                                </tr><!-- End .summary-subtotal -->
                                <tr class="summary-shipping-estimate">
                                    <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                    <td>&nbsp;</td>
                                </tr><!-- End .summary-shipping-estimate -->

                                <tr class="summary-total">
                                    <td>Total:</td>
                                    <td><?php echo Cart::subtotal(); ?></td>
                                </tr><!-- End .summary-total -->
                            </tbody>
                        </table><!-- End .table table-summary -->
                        @php
                        $collection = collect($data);
                        @endphp
                        <form action="{{ route('cart.checkout') }}" method="post">
                            @csrf
                            <input type="hidden" name="data" value="{{ $collection  }}">
                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO
                                CHECKOUT</button>
                        </form>
                    </div><!-- End .summary -->
                    <a href="" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                            SHOPPING</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
