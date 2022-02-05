@extends('frontend.layouts.app')

@section('content')
<main class="main">
@include('frontend.pages.category.sections.container')
@include('frontend.pages.category.sections.breadcrumb')
@include('frontend.pages.category.sections.toolbox')
@include('frontend.pages.category.sections.products')
@include('frontend.pages.category.sections.widget')

        </main><!-- End .main -->
 @endsection