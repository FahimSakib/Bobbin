            <div class="page-content">
                <div class="container">
            
				@if (!$service->isEmpty())
				@foreach ($service as $item)
				
                	<div class="entry-container max-col-6"  data-layout="fitRows">
					
                        <div class="entry-item lifestyle shopping col-sm-6 col-md-4 col-lg-3">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="{{route('single-fullwidth',$item->id)}}">
                                        <img src="{{ asset('storage/Service_image/'.$item->image) }}" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="{{route('single-fullwidth',$item->id)}}">Since</a>
                                        <span class="meta-separator">|</span>
									 <a href="{{route('single-fullwidth',$item->id)}}">{!! date('d - M - Y', strtotime($item->created_at)) !!}</a>

                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="{{route('single-fullwidth',$item->id)}}">{{$item->name}}</a>
                                    </h2><!-- End .entry-title -->

                                 

                                    <div class="entry-content">
                                        <p>{{$item->description}} </p>
                                        <a href="{{route('single-fullwidth',$item->id)}}" class="read-more">Continue Reading</a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->
					
                	</div><!-- End .entry-container -->
					
	@endforeach
						@endif

                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->