<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Informasi</th>
            <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NIK</td>
            <td>{{ $tiket->penumpang->nik }}</td>
        </tr>
        <tr>
            <td>Nama Penumpang</td>
            <td>{{ $tiket->penumpang->nama_penumpang }}</td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>{{ $tiket->penumpang->no_hp }}</td>
        </tr>
        <tr>
            <td>JADWAL</td>
            <td>{{ $tiket->keberangkatan->jadwal }} | {{ $tiket->keberangkatan->jam_keberangkatan }} -
                {{ $tiket->keberangkatan->jam_kedatangan }}</td>
        </tr>
        <tr>
            <td>KAPAL</td>
            <td>{{ $tiket->keberangkatan->kapal->nama_kapal }}</td>
        </tr>
        <tr>
            <td>BERANGKAT</td>
            <td>{{ \App\Models\Pelabuhan::find($tiket->keberangkatan->berangkat)->nama_pelabuhan }}</td>
        </tr>
        <tr>
            <td>TUJUAN</td>
            <td>{{ \App\Models\Pelabuhan::find($tiket->keberangkatan->tujuan)->nama_pelabuhan }}</td>
        </tr>
    </tbody>
</table>
