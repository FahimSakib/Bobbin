@php
$categories = App\Models\Category::all();
$carts = Gloudemans\Shoppingcart\Facades\Cart::content();
use Illuminate\Support\Facades\Auth;
@endphp
<header class="header header-6">
    <div class="header-top">
        <div class="container my-3">
            {{-- <div class="header-left">
                <ul class="top-menu top-link-menu d-none d-md-block">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>Call:+01609469623</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-left --> --}}

            <div class="header-right">
                {{-- <div class="social-icons social-icons-color">
                    <a href="https://www.facebook.com/bobbin.ctg" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                            class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                            class="icon-twitter"></i></a>
                    <a href="#" class="social-icon social-instagram" title="Pinterest" target="_blank"><i
                            class="icon-instagram"></i></a>
                    <a href="#" class="social-icon social-pinterest" title="Instagram" target="_blank"><i
                            class="icon-pinterest-p"></i></a>
                </div><!-- End .soial-icons --> --}}
                <ul class="top-menu top-link-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            @if (auth()->guest())
                            <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>
                            </li>
                            @else
                            <li class="mr-3"><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                            @endif
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->

                <div class="header-dropdown">
                    <a>BDT</a>
                    {{-- <div class="header-menu">
                        <ul>
                            <li><a href="#">Eur</a></li>
                            <li><a href="#">Usd</a></li>
                        </ul>
                    </div><!-- End .header-menu --> --}}
                </div><!-- End .header-dropdown -->

                <div class="header-dropdown">
                    <a>Eng</a>
                    {{-- <div class="header-menu">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div><!-- End .header-menu --> --}}
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-right -->
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                {{-- <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                                required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search --> --}}
            </div>
            <div class="header-center">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{asset('asset/frontend/assets/logo/Bobbin_logo_only_gold.png')}}" alt="Bobbin Logo"
                        width="100">
                </a>
            </div><!-- End .header-left -->
            <div class="header-right">
                <div class="header-search  header-search-visible d-none d-lg-block" >
                    {{-- <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a> --}}
                    <form action="{{ route('search.index') }}" method="get" role="search">
                        <div class="header-search-wrapper search-wrapper-wide">
                            {{-- <label for="q" class="sr-only">Search</label> --}}

                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                                required>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
                {{-- <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count">3</span>
                    <span class="wishlist-txt">My Wishlist</span>
                </a> --}}
                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @if (count($carts) != 0)
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
                                        <img src="{{ asset('storage/Product_Image/'.$cart->options->image)}}"
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
                            </div><!-- End .product -->
                            @endforeach
                        </div><!-- End .cart-product -->
                        <div class="dropdown-cart-total">
                            <span>Total</span>
                            <span class="cart-total-price"><?php echo Cart::subtotal(); ?></span>
                        </div><!-- End .dropdown-cart-total -->
                        <div class="dropdown-cart-action justify-content-center">
                            <a href="{{route('cart')}}" class="btn btn-primary text-dark">View Cart</a>
                        </div><!-- End .dropdown-cart-total -->
                        @else
                        <div class="dropdown-cart-total justify-content-center">
                            <span>Your Cart Is Empty!</span>
                        </div>
                        <div class="dropdown-cart-action justify-content-center">
                            <a href="{{route('products')}}" class="btn btn-primary text-dark">Continue Shopping</a>
                        </div>
                        @endif

                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <div class="col-md-5"></div>
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}">
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
                        <li class="{{ (request()->is('service')) ? 'active' : '' }}">
                            <a href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="{{ (request()->is('about')) ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                         <li class="{{ (request()->is('contact')) ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->

                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
            </div><!-- End .header-left -->

            {{-- <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Clearance Up to 30% Off</span></p>
            </div> --}}
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
