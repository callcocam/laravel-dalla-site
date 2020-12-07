<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{"en"}}@endif"
      data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Vuexy Vuejs, HTML & Laravel Admin Dashboard Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

    {{-- Include core + vendor Styles --}}
    @include(get_theme('panels.styles'))

</head>

<body  class="vertical-layout vertical-menu-modern 2-columns navbar-floating menu-expanded footer-static" data-menu="vertical-menu-modern" data-col="2-columns">
<div id="app">
    {{-- Include Sidebar --}}
@include(get_theme('panels.sidebar'))

<!-- BEGIN: Content-->
<div class="app-content content">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    {{-- Include Navbar --}}
    @include(get_theme('panels.navbar'))


    <div class="content-wrapper">
        {{-- Include Breadcrumb --}}


        <div class="content-body">
            {{-- Include Page Content --}}
            @yield('content')
        </div>
    </div>

</div>
<!-- End: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

{{-- include footer --}}
@include(get_theme('panels.footer'))
</div>
{{-- include default scripts --}}
@include(get_theme('panels.scripts'))

</body>

</html>
