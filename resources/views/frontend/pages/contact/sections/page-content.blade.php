<div class="page-content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                <p class="mb-3">Bobbin is an eminent lifestyle brand in the retail fashion industry of Bangladesh with
                    the purpose of provide qualityfull fashion for all within their range. As a fashion brand, Bobbin is
                    renowned for its unique style and variety of collections.</p>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contact-info">
                            <figure class="store-media mb-2 mb-lg-0">
                                <img src="asset/frontend/assets/images/stores/img-1.jpg" alt="image">
                            </figure><!-- End .store-media -->
                        </div><!-- End .contact-info -->
                    </div><!-- End .col-sm-7 -->

                    <div class="col-sm-7">
                        <div class="store-content">
                            <h3 class="store-title">Bobbin</h3><!-- End .store-title -->
                            <address>Shop13,1st Floor,B-Block(Bipani Bitan-2 New Market, 4000)</address>
                            <div><a href="tel:#">+880 1609469623
                                </a></div>

                            <h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                            <div>Saturday - Thursday 11am to 8pm</div>
                            <div>Fridayday 3pm to 8pm</div>

                            <a href="https://goo.gl/maps/wgXkjWsyeumaZr5r5" class="btn btn-link"
                                target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .store-content -->
                        {{-- <div class="contact-info">
                            <h3>The Office</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-clock-o"></i>
                                    <span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
                                </li>
                                <li>
                                    <i class="icon-calendar"></i>
                                    <span class="text-dark">Sunday</span> <br>11am-6pm ET
                                </li>
                            </ul><!-- End .contact-list -->
                        </div><!-- End .contact-info --> --}}
                    </div><!-- End .col-sm-5 -->
                </div><!-- End .row -->
            </div><!-- End .col-lg-6 -->
            <div class="col-lg-6">
                <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                <p class="mb-2">Use the form below to get in touch with the sales team</p>

            
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-acc-field">
                                <label for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    placeholder="Name" value="{{old('name')}}" name="name" id="name" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-acc-field">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    value="{{old('email')}}" placeholder="Email" name="email" id="email" required>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          
                        </div>
                        <div class="col-lg-12">
                            <div class="single-acc-field">
                                <label for="msg">Message</label>
                                <textarea class="form-control @error('msg') is-invalid @enderror" name="msg" id="msg"
                                    name="msg" value="{{old('msg')}}" rows="4" required></textarea>
                                @error('msg')
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
        </div><!-- End .row -->

        <hr class="mt-4 mb-5">

        {{-- <div class="stores mb-4 mb-lg-5">
            <h2 class="title text-center mb-3">Our Stores</h2><!-- End .title text-center mb-2 -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="store">
                        <div class="row">
                            <div class="col-sm-5 col-xl-6">
                                <figure class="store-media mb-2 mb-lg-0">
                                    <img src="asset/frontend/assets/images/stores/img-1.jpg" alt="image">
                                </figure><!-- End .store-media -->
                            </div><!-- End .col-xl-6 -->
                            <div class="col-sm-7 col-xl-6">
                                <div class="store-content">
                                    <h3 class="store-title">Wall Street Plaza</h3><!-- End .store-title -->
                                    <address>88 Pine St, New York, NY 10005, USA</address>
                                    <div><a href="tel:#">+1 987-876-6543</a></div>

                                    <h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                                    <div>Monday - Saturday 11am to 7pm</div>
                                    <div>Sunday 11am to 6pm</div>

                                    <a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .store-content -->
                            </div><!-- End .col-xl-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .store -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="store">
                        <div class="row">
                            <div class="col-sm-5 col-xl-6">
                                <figure class="store-media mb-2 mb-lg-0">
                                    <img src="asset/frontend/assets/images/stores/img-2.jpg" alt="image">
                                </figure><!-- End .store-media -->
                            </div><!-- End .col-xl-6 -->

                            <div class="col-sm-7 col-xl-6">
                                <div class="store-content">
                                    <h3 class="store-title">One New York Plaza</h3><!-- End .store-title -->
                                    <address>88 Pine St, New York, NY 10005, USA</address>
                                    <div><a href="tel:#">+1 987-876-6543</a></div>

                                    <h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                                    <div>Monday - Friday 9am to 8pm</div>
                                    <div>Saturday - 9am to 2pm</div>
                                    <div>Sunday - Closed</div>

                                    <a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .store-content -->
                            </div><!-- End .col-xl-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .store -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .stores --> --}}
    </div><!-- End .container -->
    {{-- <div id="map">
    </div><!-- End #map --> --}}
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.65688929179183!2d91.83363417334833!3d22.334355354066105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9f7b142e911%3A0x919ca40ed9ece9d!2sBobbin!5e0!3m2!1sen!2sbd!4v1649376418672!5m2!1sen!2sbd"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div><!-- End .page-content -->
