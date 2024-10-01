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
    <title>Dashboard Eticket Ferry</title>

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

    <!-- Dark mode switching -->
    <div class="dark-mode-switching">
        <div class="d-flex w-100 h-100 align-items-center justify-content-center">
            <div class="dark-mode-text text-center">
                <i class="bi bi-moon"></i>
                <p class="mb-0">Switching to dark mode</p>
            </div>
            <div class="light-mode-text text-center">
                <i class="bi bi-brightness-high"></i>
                <p class="mb-0">Switching to light mode</p>
            </div>
        </div>
    </div>

    <!-- RTL mode switching -->
    <div class="rtl-mode-switching">
        <div class="d-flex w-100 h-100 align-items-center justify-content-center">
            <div class="rtl-mode-text text-center">
                <i class="bi bi-text-right"></i>
                <p class="mb-0">Switching to RTL mode</p>
            </div>
            <div class="ltr-mode-text text-center">
                <i class="bi bi-text-left"></i>
                <p class="mb-0">Switching to default mode</p>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button">
                    <a href="elements.html">
                    </a>
                </div>

                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">Cek Tiket Penumpang</h6>
                </div>

                <!-- Settings -->
                <div class="setting-wrapper">
                    <div class="setting-trigger-btn" id="settingTriggerBtn">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-3">

        <div class="container">
            <div class="row mt-3">
                <div class="card">
                    <div class="card-body">
                        <div id="reader" width="600px"></div>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer Nav -->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content -->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">

                    <li>
                        <a href="#">
                            <i class="bi bi-collection"></i>
                            <span>History</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="/m/dashboard">
                            <i class="bi bi-house"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="/m/logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Mengirimkan permintaan AJAX saat QR Code berhasil dipindai
            $.ajax({
                type: "POST",
                url: "{{ route('mobile.ajax_tiket') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    kode_tiket: decodedText
                },
                success: function(response) {
                    if (response.statusCode === 200) {
                        $("#result").html(response.html);
                    } else {
                        $("#result").html(response.html);
                    }
                    console.log("Response:", response);
                    // Tambahkan logika lain jika diperlukan, seperti menampilkan pesan sukses di UI
                },
                error: function(xhr, status, error) {
                    $("#result").html(response.html);
                    console.error("AJAX Error:", error);
                    // Kamu bisa menambahkan feedback untuk user di sini, misalnya menampilkan alert
                    alert("Gagal mengirim data. Silakan coba lagi.");
                }
            });

        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        $(document).ready(function() {
            // Inisialisasi QR Code scanner
            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader", {
                    fps: 10, // Frame per second (lebih rendah lebih ringan)
                    qrbox: {
                        width: 250,
                        height: 250
                    }
                },
                false); // verbose = false, artinya tidak terlalu banyak log di console
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        });
    </script>
</body>

</html>
