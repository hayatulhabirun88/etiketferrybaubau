<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">Daftar Keberangkatan Kapal Ferry</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Tiket</th>
                            <th>Total Harga Tiket</th>
                            <th>Fasilitas</th>
                            <th>Kendaraan</th>
                            <th>Plat No</th>
                            <th>Nama Penumpang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $tkt)
                            <tr>
                                <td>{{ $tkt->created_at }}</td>
                                <td>{{ $tkt->kode_tiket }}</td>
                                <td>{{ number_format($tkt->harga_tiket) }}</td>
                                <td>{{ $tkt->fasilitas }}</td>
                                <td>{{ $tkt->kendaraan != null ? $tkt->kendaraan : '-' }}</td>
                                <td>{{ $tkt->plat ?? '-' }}</td>
                                <td>{{ $tkt->penumpang->nama_penumpang }}</td>
                                <td><a target="_blank" href="{{ route('tiket.list.cetak', $tkt->id) }}"
                                        class="btn btn-sm btn-warning">cetak</a> <a href=""
                                        class="btn btn-sm btn-danger">Batalkan</a></td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>
