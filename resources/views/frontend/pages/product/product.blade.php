@extends('frontend.layouts.app')
@section('content')
<main class="main">
		@include('frontend.pages.product.sections.breadcrumb')
		@include('frontend.pages.product.sections.product-details')
		@include('frontend.pages.product.sections.carousel')
		@include('frontend.pages.product.sections.product-content')           
        </main><!-- End .main -->

@endsection
