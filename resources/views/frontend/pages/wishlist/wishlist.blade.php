@extends('frontend.layouts.app')
@section('content')
<main class="main">
    @include('frontend.pages.wishlist.sections.container')
    @include('frontend.pages.wishlist.sections.breadcrumb')
    @include('frontend.pages.wishlist.sections.page-content')
</main><!-- End .main -->    
@endsection
