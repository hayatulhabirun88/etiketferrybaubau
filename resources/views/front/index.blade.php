<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}data_template/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('/') }}data_template/assets/img/favicon.png">
    <title>
        Reservasi Tiket Kapal Ferry Kota Baubau
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/') }}data_template/assets/css/soft-ui-dashboard.css?v=1.0.7"
        rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
                ASDP Baubau
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">

                    <li class="nav-item">
                        <a class="nav-link me-2" href="/login">
                            <i class="fas fa-key opacity-6  me-1"></i>
                            Masuk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @livewire('front.index')

    <!--   Core JS Files   -->
    <script src="{{ asset('/') }}data_template/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/') }}data_template/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
