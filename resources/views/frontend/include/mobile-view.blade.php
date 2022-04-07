@php
$categories = App\Models\Category::all();
$carts = Gloudemans\Shoppingcart\Facades\Cart::content();
use Illuminate\Support\Facades\Auth;
@endphp
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="{{ route('home') }}">Home</a>

                   
                </li>
              <li class="{{ (request()->is('products')) ? 'active' : '' }}">
                            <a href="{{ route('products') }}">Products</a>
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
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->