@php
$categories = App\Models\Category::all();
$carts = Gloudemans\Shoppingcart\Facades\Cart::content();
use Illuminate\Support\Facades\Auth;
@endphp
<header class="header header-6">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <ul class="top-menu top-link-menu d-none d-md-block">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="social-icons social-icons-color">
                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                            class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                            class="icon-twitter"></i></a>
                    <a href="#" class="social-icon social-instagram" title="Pinterest" target="_blank"><i
                            class="icon-instagram"></i></a>
                    <a href="#" class="social-icon social-pinterest" title="Instagram" target="_blank"><i
                            class="icon-pinterest-p"></i></a>
                </div><!-- End .soial-icons -->
                <ul class="top-menu top-link-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>


                            @if (auth()->guest())
                            <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>
                            </li>
                            @else
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>

                            @endif



                        </ul>
                    </li>
                </ul><!-- End .top-menu -->

                <div class="header-dropdown">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">Eur</a></li>
                            <li><a href="#">Usd</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->

                <div class="header-dropdown">
                    <a href="#">Eng</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-right -->
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                                required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>
            <div class="header-center">
                <a href="index.html" class="logo">
                    <img src="asset/frontend/assets/images/bobbin-logo.png" alt="Bobbin Logo" width="180" height="35">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right">
                <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count">3</span>
                    <span class="wishlist-txt">My Wishlist</span>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                        {{-- <span class="cart-txt">$ 164,00</span> --}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            @foreach ($carts as $cart )
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">{{$cart->name}}</a>
                                    </h4>


                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">{{$cart->qty}}</span>
                                        X ৳ {{$cart->price}}
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{ asset('storage/Product_image/'.$cart->options->image)}}"
                                            alt="product">
                                    </a>
                                </figure>
                                <form action="{{route('cart.remove')}}" method="POST">
                                    @csrf
                                    <input hidden name="rowId" value="{{$cart->rowId}}">
                                    <a class="btn-remove" title="Remove Product"><button type="submit"><i
                                                class="icon-close"></i></button>
                                    </a>
                                </form>

                                {{-- <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a> --}}
                            </div><!-- End .product -->
                            @endforeach



                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price"><?php echo Cart::subtotal(); ?></span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="{{route('cart')}}" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>


                        </li>

                        <li class="{{ (request()->is('products')) ? 'active' : '' }}">
                            <a href="{{ route('products') }}">Products</a>


                        </li>
                        <li class="{{ (request()->is('category/*')) ? 'active' : '' }}">
                            <a href="javascript:void(0)" class="sf-with-ul">Categories</a>

                            <ul>
                                @foreach ($categories as $category)
                                @if (count($category->products)!=0)
                                <li><a href="{{ route('category',$category->id) }}">{{ $category->title }}</a></li>

                                @endif


                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ (request()->is('blog')) ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">Blog</a>


                        </li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->

                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
            </div><!-- End .header-left -->

            <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Clearance Up to 30% Off</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
