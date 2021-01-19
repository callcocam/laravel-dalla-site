<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ sprintf("%s - %s" ,config('app.name','AdminLTE'), $tenant->name ) }}</title>
    <link rel="icon" href="{{ url('img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('loader.css') }}">
    <!-- Fonts -->

    {{-- Include core + vendor Styles --}}
    <link href="{{ asset('_cdn/admin/css/app.css') }}" rel="stylesheet">

</head>
<body>
{{-- <div id="loading-bg">
      <div class="loading-logo">
        <img src="{{ url('img/logo-dalla.png') }}" alt="Logo">
      </div>
      <div class="loading">
        <div class="effect-1 effects"></div>
        <div class="effect-2 effects"></div>
        <div class="effect-3 effects"></div>
      </div>
    </div> --}}
<!-- wrapper -->
<div id="app">
    @yield('content')
</div>
<!-- ./wrapper -->
<script>
    window.menus = <?=$menus?>;
</script>
{{-- include default scripts --}}
<script src="{{ asset(asset('_cdn/admin/js/app-08.js')) }}" defer></script>

</body>

</html>
