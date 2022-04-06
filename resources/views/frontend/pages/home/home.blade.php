@extends('frontend.layouts.app')

@section('content')
    <main class="main">
    @include('frontend.pages.home.sections.into')
    @include('frontend.pages.home.sections.lighter')
    @include('frontend.pages.home.sections.container')
    {{-- @include('frontend.pages.home.sections.cta') --}}
    @include('frontend.pages.home.sections.carousel')
    </main><!-- End .main -->
@endsection
