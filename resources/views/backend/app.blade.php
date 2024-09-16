<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description"
        content="custom admin dashboard. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="admin, dashboard, custom dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" - Admin Dashboard" />

    <title>
        @yield('title')
    </title>

    {{-- Style --}}
    @include('backend.partials.styles')
    @stack('css')

</head>


<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">

            <!--SIDEBAR SECTION START-->
            @include('backend.partials.sidebar')
            <!--SIDEBAR SECTION START-->

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--====================== begin::HEADER SECTION =======================-->
                @include('backend.partials.header')
                <!--======================= end::HEADER SECTION ====================-->

                <!-- MAIN CONTENT START -->
                @yield('content')
                <!-- MAIN CONTENT END -->

                <!-- FOOTER START -->
                @include('backend.partials.footer')
                <!-- FOOTER END -->
            </div>

        </div>
    </div>

    <!--end::Engage toolbar--><!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>

    <!-- JAVASCRIPT -->
    @include('backend.partials.scripts')

    @stack('script')

    <script>
        $(document).ready(function() {

            toastr.options.timeOut = 10000;
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toastr-bottom-right",
                };

                toastr.success("{{ session('success') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toastr-bottom-right",
                };
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toastr-bottom-right",
                };
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toastr-bottom-right",
                };
                toastr.warning("{{ session('warning') }}");
            @endif
        });
    </script>



</body>

</html>
