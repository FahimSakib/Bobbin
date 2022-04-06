@extends('frontend.layouts.app')

@section('content')
        <main class="main">
        	
		
		@include('frontend.pages.about.sections.breadcrumb')
		@include('frontend.pages.about.sections.container')
		@include('frontend.pages.about.sections.page-content') 
        </main><!-- End .main -->

@endsection
