<div>

    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <section class="min-vh-50 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('{{ asset('/') }}depan.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Pemesanan Berhasil! Segera Lakukan Pembayaran</h1>
                            <p class="text-lead text-white">Website Resmi reservasi tiket Kapal Ferry Kota Baubau.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>Pembayaran Tiket Kapal Ferry</h5>
                            </div>

                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td width="160">NIK</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('penumpang')['nik'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Penumpang</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('penumpang')['nama_penumpang'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('penumpang')['no_hp'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('user')['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('penumpang')['alamat'] }}</td>
                                    </tr>

                                </table>
                                <hr>
                                <table>
                                    <tr>
                                        <td width="160">Nama Kapal</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ \App\Models\Kapal::find(session()->get('keberangkatan')['kapal_id'])->nama_kapal }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jadwal</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ session()->get('jadwal') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Berangkat</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ \App\Models\Pelabuhan::find(session()->get('keberangkatan')['berangkat'])->nama_pelabuhan }}
                                            {{ session()->get('keberangkatan')['jam_keberangkatan'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td>:&nbsp;</td>
                                        <td>{{ \App\Models\Pelabuhan::find(session()->get('keberangkatan')['tujuan'])->nama_pelabuhan }}
                                            {{ session()->get('keberangkatan')['jam_kedatangan'] }}</td>
                                    </tr>

                                    @if (session()->get('ekonomi') > 0)
                                        <tr>
                                            <td>Ekonomi</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ session()->get('ekonomi') ?? '0' }}</td>
                                        </tr>
                                    @endif
                                    @if (session()->get('vip') > 0)
                                        <tr>
                                            <td>VIP</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ session()->get('vip') ?? '0' }}</td>
                                        </tr>
                                    @endif
                                    @if (session()->get('motor') > 0)
                                        <tr>
                                            <td>Motor</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ session()->get('motor') ?? '0' }}</td>
                                        </tr>
                                    @endif
                                    @if (session()->get('mobil') > 0)
                                        <tr>
                                            <td>Mobil</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ session()->get('mobil') ?? '0' }}</td>
                                        </tr>
                                    @endif
                                    @if (session()->get('mobil') > 0)
                                        <tr>
                                            <td>Truk</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ session()->get('truk') ?? '0' }}</td>
                                        </tr>
                                    @endif
                                    @if (session()->get('total_harga') > 0)
                                        <tr>
                                            <td>Total Harga Tiket</td>
                                            <td>:&nbsp;</td>
                                            <td>{{ number_format(session()->get('total_harga')) ?? '0' }}</td>
                                        </tr>
                                    @endif
                                </table><br>
                                <div class="alert alert-warning text-center" style="color:white; font-weight:bold;">
                                    STATUS PENDING
                                </div>
                                <p>Kami telah mengirim Jumlah Pembayaran ke Email Anda! Silahkan di proses terlebih
                                    dahulu.</p>
                                <br><br>
                                <div class="text-center">
                                    <button id="pay-button" type="submit" class="btn btn-primary d-block mx-auto">Cek
                                        Status</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <footer class="footer py-5">
            <div class="container">

                <div class="row">
                    <div class="col-8 mx-auto text-center mt-1">
                        <p class="mb-0 text-secondary">
                            Copyright ©
                            Tri Yulistiani
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
</div>
