@php

$carts = Gloudemans\Shoppingcart\Facades\Cart::content();
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
                                <th></th>
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
                               {{-- <td class="price-col">{{$cart->weight}}</td> --}}
                                @php
                                
                                 
                                 
                                     $size = App\Models\Size::find($cart->options->size);
                                     $color = App\Models\Color::find($cart->options->color);
                                   
                                @endphp
                                 <td class="price-col">{{$size->title}}</td>
                                <td class="price-col">{{$color->title}}</td>
                                <td class="quantity-col">{{$cart->qty}}</td>
                                {{-- <td class="quantity-col">
                                    <div class="cart-product">
                                        <input type="number" class="form-control" value={{$cart->qty}} min="1" max="100"
                                            step="1" data-decimals="0" required readonly>
                                    </div><!-- End .cart-product-quantity -->
                                </td> --}}
                                @php
                                $tp=$cart->price*$cart->qty;

                                @endphp
                                <td class="total-col">{{$tp}}</td>
                                <form action="{{route('cart.remove')}}" method="POST">
                                @csrf
                                  <input hidden name="rowId" value="{{$cart->rowId}}">
                                <td class="remove-col"><button type="submit" class="btn-remove"><i class="icon-close"></i></button>
                                </td>
                                </form>
                            </tr>
                            @endforeach


                        </tbody>
                    </table><!-- End .table table-wishlist -->

                    {{-- <div class="cart-bottom">
                        <div class="cart-discount">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" required placeholder="coupon code">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary-2" type="submit"><i
                                                class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- End .input-group -->
                            </form>
                        </div><!-- End .cart-discount -->

                        <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                class="icon-refresh"></i></a>
                    </div><!-- End .cart-bottom --> --}}
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
                                {{-- <tr class="summary-shipping">
                                    <td>Shipping:</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="free-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="free-shipping">Free
                                                Shipping</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>$0.00</td>
                                </tr><!-- End .summary-shipping-row -->

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="standart-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label"
                                                for="standart-shipping">Standart:</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>$10.00</td>
                                </tr><!-- End .summary-shipping-row -->

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="express-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="express-shipping">Express:</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>$20.00</td>
                                </tr><!-- End .summary-shipping-row --> --}}

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

                        <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO
                            CHECKOUT</a>
                    </div><!-- End .summary -->

                    <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                            SHOPPING</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
