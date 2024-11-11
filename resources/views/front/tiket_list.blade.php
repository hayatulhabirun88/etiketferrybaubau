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
    @include('front.navbar')

    @livewire('front.tiket-list')

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
