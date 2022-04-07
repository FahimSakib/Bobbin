@extends('frontend.layouts.app')
@section('content')
    <main class="main">
        @include('frontend.pages.service.sections.container')
        @include('frontend.pages.service.sections.breadcrumb')
        @include('frontend.pages.service.sections.page-content')
    </main><!-- End .main -->
@endsection
