@extends('frontend.layouts.app')
@section('content')
    <main class="main">
        @include('frontend.pages.dashboard.sections.page-header')
        @include('frontend.pages.dashboard.sections.breadcrumb')
        @include('frontend.pages.dashboard.sections.page-content')
    </main><!-- End .main -->
@endsection
