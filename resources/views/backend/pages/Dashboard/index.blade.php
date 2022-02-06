@extends('backend.layouts.app')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
    @include('backend.pages.Dashboard.sections.upper-cards')
    @include('backend.pages.Dashboard.sections.main-section')
    </section>
    @include('backend.include.setting-sidebar')
</div>
@endsection
