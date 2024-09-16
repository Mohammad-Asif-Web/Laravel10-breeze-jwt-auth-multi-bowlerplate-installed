<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Custom admin dashboard. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Admin, Dashboard, admin dashboard themes, dark mode, custom dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Admin Dashboard Asif" />
    <title>Sign In | Admin</title>

    <!-- styles -->
    <link rel="canonical" href="https://preview.keenthemes.com/craft" />
    <link rel="shortcut icon" href="{{asset('uploads/favicon/favicon.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <a href="" class="py-2 py-lg-20">
                            {{-- <img alt="Logo" src="{{ asset('backend/media/logos/logo-ellipse.svg') }}"
                                class="h-60px h-lg-70px" /> --}}
                            <img alt="Logo" src="{{asset('frontend/images/logo-white.png')}}"
                                class="h-60px h-lg-70px" />
                        </a>
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">
                            Welcome to Tribute Tiles
                        </h1>
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                            Plan your business by choosing a topic creating <br />
                            an outline and checking facts
                        </p>
                    </div>
                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url(../../assets/media/illustrations/sigma-1/17.png)">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        {{-- form start --}}
                        <form class="form w-100" action="{{route('admin.login')}}" method="POST">
                            @csrf
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-3">
                                    Sign In to Admin Dashboard
                                </h1>
                            </div>
                            {{-- email --}}
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bold text-dark">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    name="email" autocomplete="off" />
                            </div>
                            {{-- password --}}
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                                    {{-- <a href="passwor d-reset.html" class="link-primary fs-6 fw-bold">
                                        Forgot Password ?
                                    </a> --}}
                                </div>
                                <input class="form-control form-control-lg form-control-solid"
                                        type="password" name="password" autocomplete="off" />
                            </div>
                            @if ($errors->any())
                                <ul class="text-danger mb-4">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            {{-- google,facebook,apple login --}}
                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label"> Continue </span>
                                    <span class="indicator-progress">
                                        Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
                                <a href="{{route('google.login')}}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" class="h-20px me-3"
                                        src="{{ asset('backend/media/svg/brand-logos/google-icon.svg') }}"/>
                                    Continue with Google
                                </a>
                                <a href="" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" class="h-20px me-3"
                                        src="{{ asset('backend/media/svg/brand-logos/facebook-4.svg') }}" />
                                    Continue with Facebook
                                </a>
                                <a href="" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img src="{{ asset('backend/media/svg/brand-logos/apple-black.svg') }}"
                                        alt="Logo" class="theme-light-show h-20px me-3" />
                                    <img  src="{{ asset('backend/media/svg/brand-logos/apple-black-dark.svg') }}"
                                        alt="Logo" class="theme-dark-show h-20px me-3" />
                                    Continue with Apple
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var hostUrl = "../../assets/index.html";
    </script>
    <script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/custom/authentication/sign-in/general.js') }}"></script>

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
