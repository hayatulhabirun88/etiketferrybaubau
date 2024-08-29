<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">History</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Kode Tiket
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Penumpang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Harga Tiket</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jenis Pembayaran</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Metode Pembayaran</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $htr)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">{{ $htr->tiket->kode_tiket }}</h6>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ $htr->tiket->penumpang->nama_penumpang }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ number_format($htr->tiket->harga_tiket) }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ $htr->jenis_pembayaran }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ $htr->metode_pembayaran }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            @if ($htr->bukti_pembayaran)
                                                <img src="{{ asset('storage/' . $htr->bukti_pembayaran) }}"
                                                    class="img-fluid rounded" alt="Bukti Pembayaran">
                                            @else
                                                -
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#vip').on('input', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
        $('#ekonomi').on('input', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
        $('#motor').on('input', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
        $('#mobil').on('input', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
        $('#truk').on('input', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
    </script>
</div>
