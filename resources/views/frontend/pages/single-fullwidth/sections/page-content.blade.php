<div class="page-content">
    {{-- <figure class="entry-media">
        <img src="asset/frontend/assets/images/blog/single/fullwidth/1.jpg" alt="image desc">
    </figure><!-- End .entry-media --> --}}
    <div class="container">
        <article class="entry single-entry entry-fullwidth">
            <div class="row">
                <div class="col-lg-11">
                    <div class="entry-body">
                        <h2 class="entry-title entry-title-big">
                            {{$service->name}}
                        </h2><!-- End .entry-title -->

                        <div class="entry-content editor-content">
                            <img src="{{ asset('storage/Service_image/'.$service->image) }}"
                                class="rounded mx-auto d-block" alt="image" style="width:50%; object-fit: cover">
                            <div class="pb-1"></div><!-- End .pb-1 -->
                            <p class="text-justify">{{$service->description}}</p>
                            <div class="pb-1"></div><!-- End .pb-1 -->
                        </div>
                        <div class="related-posts">
                            <h3 class="title">Other Services</h3><!-- End .title -->

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
                                @foreach ($services as $item)
                                <article class="entry entry-grid">
                                    <figure class="entry-media">
                                        <a href="{{route('single-fullwidth',$item->id)}}">
                                            <img src="{{ asset('storage/Service_image/'.$item->image) }}"
                                                alt="image desc" style="object-fit: cover">
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-meta">
                                            <a href="{{route('single-fullwidth',$item->id)}}">Since</a>
                                            <span class="meta-separator">|</span>
                                            <a href="{{route('single-fullwidth',$item->id)}}">{!! date('d - M - Y',
                                                strtotime($item->created_at)) !!}</a>
                                        </div><!-- End .entry-meta -->

                                        <h2 class="entry-title">
                                            <a href="{{route('single-fullwidth',$item->id)}}">{{ $item->name }}</a>
                                        </h2><!-- End .entry-title -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->
                                @endforeach
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
