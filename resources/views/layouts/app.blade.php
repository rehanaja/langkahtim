@include('layouts.header.header')


<body class="g-sidenav-show  bg-gray-100">
@include('layouts.navbars.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.navbars.nav')
    <!-- End Navbar -->

    <div class="container-fluid py-4">

        @yield('content')


@include('layouts.footer.footer')
