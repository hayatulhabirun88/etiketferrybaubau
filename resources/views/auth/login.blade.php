<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}data_template/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('/') }}logo.png">
    <title>
        Login | Sistem Informasi Etiket Darma Ferry
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/') }}data_template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/') }}data_template/assets/css/soft-ui-dashboard.css?v=1.0.7"
        rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    @livewire('auth.login-index')
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> by Tri Yulistiani.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('/') }}data_template/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('/') }}data_template/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script src="{{ asset('/') }}data_template/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
