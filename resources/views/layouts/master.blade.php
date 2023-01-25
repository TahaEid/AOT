<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- head start -->
    @include('layouts.inc.head')
    <!-- head end -->

    <body>

        <!-- Preloader start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader end -->


        <!-- Main wrapper start -->
        <div id="main-wrapper">

            <!-- Nav header start -->
            @include('layouts.inc.nav-head')
            <!-- Nav header end -->

            <!-- Header start -->
            @include('layouts.header')
            <!-- Header end ti-comment-alt -->

            <!-- Sidebar start -->
            @include('layouts.inc.sidebar')
            <!-- Sidebar end -->

            <!-- Content body start -->
            @yield('content')
            <!-- Content body end -->


            <!-- Footer start -->
            @include('layouts.footer')
            <!-- Footer end -->


            <!-- Right sidebar start -->
            @include('layouts.inc.r-sidebar')
            <!-- Right sidebar end -->
        </div>
        <!-- Main wrapper end -->

        <!-- Scripts -->
        @include('layouts.inc.e-scripts')
    </body>


</html>
