@extends('frontend.layouts.app')

@section('content')
        <main class="main">
        	
		@include('frontend.pages.blog.sections.page-header')
		@include('frontend.pages.blog.sections.breadcrumb')
		@include('frontend.pages.blog.sections.page-content') 
        </main><!-- End .main -->

@endsection
