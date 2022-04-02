<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bobbin | {{ $title }}</title>
    @include('frontend.include.styles')
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="page-wrapper">
       @include('frontend.include.header')
       @yield('content')
       @include('frontend.include.footer')
    </div><!-- End .page-wrapper -->

    @include('frontend.include.mobile-view')
    @include('frontend.include.modal')
    @include('frontend.include.newsletter')
    @include('frontend.include.scripts')
    @include('sweetalert::alert')
</body>

</html>
