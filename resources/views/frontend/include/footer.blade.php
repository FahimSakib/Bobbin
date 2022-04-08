 <footer class="footer footer-2">
     <div class="footer-middle">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-lg-6">
                     <div class="widget widget-about">
                         {{-- <img src="asset/frontend/assets/images/bobbin-logo-only-gold.png" alt="Bobbin Logo" width="180" height="30"> --}}
                         <p class="footer-brand">Bobbin</p>
                         <p class="text-justify">Bobbin is an eminent lifestyle brand in the retail fashion industry of Bangladesh with the
                             purpose of provide qualityfull fashion for all within their range. As a fashion brand,
                             Bobbin is renowned for its unique style and variety of collections. We crafted our
                             fashionable attires & accessories for all age ranges who believe themselves to be stand out
                             with their unique fashion sense and style statement.</p>

                         <div class="widget-about-info">
                             <div class="row">
                                 <div class="col-sm-6 col-md-4">
                                     <span class="widget-about-title">Got Question? Call us 24/7</span>
                                     <a href="tel:01609469623">+880 1609469623</a>
                                 </div><!-- End .col-sm-6 -->
                                 <div class="col-sm-6 col-md-8">
                                     {{-- <span class="widget-about-title">Payment Method</span> --}}
                                     {{-- <figure class="footer-payments">
                                                <img src="asset/frontend/assets/images/payments.png" alt="Payment methods" width="272"
                                                    height="20">
                                            </figure><!-- End .footer-payments --> --}}
                                 </div><!-- End .col-sm-6 -->
                             </div><!-- End .row -->
                         </div><!-- End .widget-about-info -->
                     </div><!-- End .widget about-widget -->
                 </div><!-- End .col-sm-12 col-lg-3 -->

                 <div class="col-sm-4 col-lg-2">
                     <div class="widget">
                         <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                         <ul class="widget-list">
                             <li><a href="{{ route('about') }}">About Bobbin</a></li>
                             <li><a href="#">How to shop on Bobbin</a></li>
                             <li><a href="{{ route('faq') }}">FAQ</a></li>
                             <li><a href="{{ route('contact') }}">Contact us</a></li>
                             {{-- <li><a href="{{ route('login') }}">Log in</a></li> --}}
                         </ul><!-- End .widget-list -->
                     </div><!-- End .widget -->
                 </div><!-- End .col-sm-4 col-lg-3 -->

                 {{-- <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 --> --}}

                 <div class="col-sm-4 col-lg-2">
                     <div class="widget">
                         <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                         <ul class="widget-list">
                             <li><a href="{{ route('login') }}">Sign In</a></li>
                             <li><a href="{{ route('cart') }}">View Cart</a></li>
                             {{-- <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li> --}}
                             <li><a href="#">Help</a></li>
                         </ul><!-- End .widget-list -->
                     </div><!-- End .widget -->
                 </div><!-- End .col-sm-64 col-lg-3 -->
             </div><!-- End .row -->
         </div><!-- End .container -->
     </div><!-- End .footer-middle -->

     <div class="footer-bottom">
         <div class="container">
             <p class="footer-copyright">Copyright © 2022 Bobbin Store. All Rights Reserved.</p>
             <!-- End .footer-copyright -->
             <ul class="footer-menu">
                 <li><a href="#">Terms Of Use</a></li>
                 <li><a href="#">Privacy Policy</a></li>
             </ul><!-- End .footer-menu -->

             <div class="social-icons social-icons-color">
                 <span class="social-label">Social Media</span>
                 <a href="https://www.facebook.com/bobbin.ctg" class="social-icon social-facebook" title="Facebook"
                     target="_blank"><i class="icon-facebook-f"></i></a>
                 {{-- <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                         class="icon-twitter"></i></a> --}}
                 <a href="https://www.instagram.com/bobbin513/?hl=en" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                         class="icon-instagram"></i></a>
                 {{-- <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                         class="icon-youtube"></i></a> --}}
                 {{-- <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                         class="icon-pinterest"></i></a> --}}
             </div><!-- End .soial-icons -->
         </div><!-- End .container -->
     </div><!-- End .footer-bottom -->
 </footer><!-- End .footer -->
