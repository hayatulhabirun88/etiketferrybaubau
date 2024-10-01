<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Title -->
    <title>Etiket Ferry</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/') }}mb_template/img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('/') }}mb_template/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}mb_template/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('/') }}mb_template/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}mb_template/img/icons/icon-180x180.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}mb_template/style.css">

    <!-- Web App Manifest -->
    <link rel="manifest" href="{{ asset('/') }}mb_template/manifest.json">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Internet Connection Status -->
    <div class="internet-connection-status" id="internetStatus"></div>


    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center px-4">
                <img class="login-intro-img" src="{{ asset('/') }}logo.png" alt="">
            </div>

            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">Silahkan masuk ke sistem</h6>

                @livewire('mobile.login-index')

            </div>

            <!-- Login Meta -->
        </div>
    </div>
    </div>

    <!-- All JavaScript Files -->
    <script src="{{ asset('/') }}mb_template/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/slideToggle.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/internet-status.js"></script>
    <script src="{{ asset('/') }}mb_template/js/tiny-slider.js"></script>
    <script src="{{ asset('/') }}mb_template/js/venobox.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/countdown.js"></script>
    <script src="{{ asset('/') }}mb_template/js/rangeslider.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/vanilla-dataTables.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/index.js"></script>
    <script src="{{ asset('/') }}mb_template/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}mb_template/js/dark-rtl.js"></script>
    <script src="{{ asset('/') }}mb_template/js/active.js"></script>
    <script src="{{ asset('/') }}mb_template/js/pwa.js"></script>
</body>

</html>
