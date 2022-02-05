@extends('frontend.layouts.app')

@section('content')
        <main class="main">



		@include('frontend.pages.cart.sections.container')
		@include('frontend.pages.cart.sections.breadcrumb')
		@include('frontend.pages.cart.sections.page-content') 
      
        </main><!-- End .main -->

@endsection