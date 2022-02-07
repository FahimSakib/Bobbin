@extends('frontend.layouts.app')
@section('content')
<main class="main">
        
                       
					@include('frontend.pages.product-gallery.sections.breadcrumb')
					


					<!-- End .breadcrumb-nav -->
					@include('frontend.pages.product-gallery.sections.product-gallery-carousel')
					@include('frontend.pages.product-gallery.sections.product-details')
					@include('frontend.pages.product-gallery.sections.product-details-tab')
					@include('frontend.pages.product-gallery.sections.product-details-owl-carousel')

              
               
        </main><!-- End .main -->

@endsection
