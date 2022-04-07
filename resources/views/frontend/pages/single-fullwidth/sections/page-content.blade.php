<div class="page-content">
    {{-- <figure class="entry-media">
        <img src="asset/frontend/assets/images/blog/single/fullwidth/1.jpg" alt="image desc">
    </figure><!-- End .entry-media --> --}}
    <div class="container">
        <article class="entry single-entry entry-fullwidth">
            <div class="row">
                <div class="col-lg-11">
                    <div class="entry-body">
                        <div class="entry-meta">
                            {{-- <span class="entry-author">
                                by <a href="#">John Doe</a>
                            </span>
                            <span class="meta-separator">|</span> --}}
                            <a href="#">{!! date('d - M - Y', strtotime($service->created_at)) !!}</a>
                            {{-- <span class="meta-separator">|</span>
                            <a href="#">2 Comments</a> --}}
                        </div><!-- End .entry-meta -->

                        <h2 class="entry-title entry-title-big">
                            {{$service->name}}
                        </h2><!-- End .entry-title -->

   

                        <div class="entry-content editor-content">
                            <p>{{$service->description}}</p>

                          

                            <div class="pb-1"></div><!-- End .pb-1 -->

                            <img src="{{ asset('storage/Service_image/'.$service->image) }}" alt="image">

                            <div class="pb-1"></div><!-- End .pb-1 -->

</div>
                            <div class="related-posts">
                                <h3 class="title">Related Posts</h3><!-- End .title -->

                                <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        }
                    }
                }'>
                                    <article class="entry entry-grid">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="asset/frontend/assets/images/blog/grid/3cols/post-1.jpg"
                                                    alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">Nov 22, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">2 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Cras ornare tristique elit.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Lifestyle</a>,
                                                <a href="#">Shopping</a>
                                            </div><!-- End .entry-cats -->
                                        </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->

                                    <article class="entry entry-grid">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="asset/frontend/assets/images/blog/grid/3cols/post-2.jpg"
                                                    alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">Nov 21, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">0 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Vivamus ntulla necante.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Lifestyle</a>
                                            </div><!-- End .entry-cats -->
                                        </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->

                                    <article class="entry entry-grid">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="asset/frontend/assets/images/blog/grid/3cols/post-3.jpg"
                                                    alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">Nov 18, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">3 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Utaliquam sollicitudin leo.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Fashion</a>,
                                                <a href="#">Lifestyle</a>
                                            </div><!-- End .entry-cats -->
                                        </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->

                                    <article class="entry entry-grid">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="asset/frontend/assets/images/blog/grid/3cols/post-4.jpg"
                                                    alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">Nov 15, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">4 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Fusce pellentesque suscipit.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Travel</a>
                                            </div><!-- End .entry-cats -->
                                        </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- End .related-posts -->

                            {{-- <div class="comments">
                                <h3 class="title">0 Comment</h3><!-- End .title -->
                            </div><!-- End .comments -->
                            <div class="reply">
                                <div class="heading">
                                    <h3 class="title">Leave A Reply</h3><!-- End .title -->
                                    <p class="title-desc">Your email address will not be published. Required fields are
                                        marked *</p>
                                </div><!-- End .heading -->

                                <form action="#">
                                    <label for="reply-message" class="sr-only">Comment</label>
                                    <textarea name="reply-message" id="reply-message" cols="30" rows="4"
                                        class="form-control" required placeholder="Comment *"></textarea>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="reply-name" class="sr-only">Name</label>
                                            <input type="text" class="form-control" id="reply-name" name="reply-name"
                                                required placeholder="Name *">
                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6">
                                            <label for="reply-email" class="sr-only">Email</label>
                                            <input type="email" class="form-control" id="reply-email" name="reply-email"
                                                required placeholder="Email *">
                                        </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->

                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>POST COMMENT</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form>
                            </div><!-- End .reply --> --}}
                        </div><!-- End .container -->
                    </div><!-- End .page-content -->
