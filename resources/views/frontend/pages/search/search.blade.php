@extends('frontend.layouts.app')
@section('content')

<main class="main">
    @include('frontend.pages.search.sections.breadcrumb')
    @include('frontend.pages.search.sections.content')
</main>

@endsection

@push('scripts')
<script src="asset/frontend/assets/js/superfish.min.js"></script>
@endpush
