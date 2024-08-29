<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">Pemesanan Tiket</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK"
                        wire:model="nik">
                    @error('nik')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_penumpang" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang"
                        placeholder="Nama Penumpang" wire:model="nama_penumpang">
                    @error('nama_penumpang')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="6281241222233"
                        wire:model="no_hp">
                    @error('no_hp')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" wire:model="alamat"
                        placeholder="Baubau"></textarea>
                    @error('alamat')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                @if (session()->get('motor') > 0 || session()->get('mobil') > 0 || session()->get('truk') > 0)
                    <div class="mb-3">
                        <label for="plat_no" class="form-label">Plat Nomor Kendaraan</label>
                        <input type="text" class="form-control" name="plat_no" id="plat_no"
                            placeholder="DT 1111 GH" wire:model="plat_no">
                        @error('plat_no')
                            <span style="color:red; font-size:12px;">{{ $message }}</span>
                        @enderror
                    </div>
                @endif

                <button class="btn btn-sm btn-primary" wire:click.prevent="prosesTiket()">Proses Tiket</button>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">

                <table>
                    <tbody>
                        <tr>
                            <td width="200">Nama Kapal</td>
                            <td>:&nbsp;</td>
                            <td>{{ \App\Models\Kapal::find(session()->get('keberangkatan')['kapal_id'])->nama_kapal }}
                            </td>
                        </tr>
                        <tr>
                            <td>Jadwal</td>
                            <td>:&nbsp;</td>
                            <td>{{ session()->get('keberangkatan')['jadwal'] }}</td>
                        </tr>
                        <tr>
                            <td>Berangkat</td>
                            <td>:&nbsp;</td>
                            <td>{{ \App\Models\Pelabuhan::find(session()->get('keberangkatan')['berangkat'])->nama_pelabuhan }}
                                {{ session()->get('keberangkatan')['jam_keberangkatan'] }}
                            </td>
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
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
