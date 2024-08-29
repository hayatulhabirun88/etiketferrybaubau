<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        .ticket {
            width: 400px;
            border: 1px solid #000;
            padding: 10px;
            margin: 0 auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .ticket table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .ticket td {
            padding: 5px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .ticket td strong {
            font-weight: bold;
        }

        .qrcode {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="ticket">
        <table>
            <tr>
                <td><img src="{{ asset('/') }}logo.png" width="80" alt=""></td>
                <td>
                    <h4>PT. Dharma Lautan Utama Cab. Baubau <br><small>Jl. MH Thamrin No. 3 Baubau <br> Telp:
                            (0402)2826832</small>
                    </h4>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td><strong>Kode Tiket</strong></td>
                <td>: {{ $tiket->kode_tiket }}</td>
            </tr>
            <tr>
                <td><strong>Tanggal</strong></td>
                <td>: {{ $tiket->keberangkatan->jadwal }}</td>
            </tr>
            <tr>
                <td><strong>Nama Penumpang</strong></td>
                <td>: {{ $tiket->penumpang->nama_penumpang }}</td>
            </tr>
            <tr>
                <td><strong>Berangkat</strong></td>
                <td>: {{ \App\Models\Pelabuhan::find($tiket->keberangkatan->berangkat)->nama_pelabuhan }}</td>
            </tr>
            <tr>
                <td><strong>Tujuan</strong></td>
                <td>: {{ \App\Models\Pelabuhan::find($tiket->keberangkatan->tujuan)->nama_pelabuhan }}</td>
            </tr>
            <tr>
                <td><strong>Fasilitas</strong></td>
                <td>: {{ $tiket->fasilitas }}</td>
            </tr>
            @if ($tiket->kendaraan)
                <tr>
                    <td><strong>Kendaraan</strong></td>
                    <td>: {{ $tiket->kendaraan }}</td>
                </tr>
                <tr>
                    <td><strong>No Plat Kendaraan</strong></td>
                    <td>: {{ $tiket->plat }}</td>
                </tr>
            @endif
            <tr>
                <td><strong>Total Harga Tiket</strong></td>
                <td>: {{ number_format($tiket->harga_tiket) }}</td>
            </tr>

        </table>
        <br><br>
        <div class="qrcode" id="qrcode"></div>
        <br><br>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "{{ $tiket->kode_tiket }}",
            width: 200,
            height: 200,
        });

        // Fungsi untuk mencetak halaman secara otomatis setelah QR code selesai di-generate
        window.onload = function() {
            window.print();
        };
    </script>

</body>

</html>
