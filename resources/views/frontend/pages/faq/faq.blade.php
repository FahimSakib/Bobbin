@extends('frontend.layouts.app')
@section('content')
    <main class="main">
        @include('frontend.pages.faq.sections.page-header')
        @include('frontend.pages.faq.sections.breadcrumb')
        @include('frontend.pages.faq.sections.page-content')
        @include('frontend.pages.faq.sections.cta')
    </main><!-- End .main -->
@endsection
