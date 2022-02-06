@extends('frontend.layouts.app')
@section('content')
    <main class="main">
        @include('frontend.pages.contact.sections.container')
        @include('frontend.pages.contact.sections.breadcrumb')
        @include('frontend.pages.contact.sections.page-content')
    </main><!-- End .main -->
@endsection

@push('scripts')
    <!-- Google Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
@endpush