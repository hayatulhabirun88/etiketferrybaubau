<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">Jadwal Keberangkatan</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="jadwal" class="form-label">Jadwal</label>
                    <input type="date" class="form-control" name="jadwal" id="jadwal" aria-describedby="helpId"
                        placeholder="Nama kbr" wire:model="jadwal">
                    @error('jadwal')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="berangkat" class="form-label">Berangkat</label>
                            <select name="berangkat" class="form-control" id="berangkat" wire:model="berangkat">
                                <option value="">Dari</option>
                                @foreach ($pelabuhan as $plbh)
                                    <option value="{{ $plbh->id }}">{{ $plbh->nama_pelabuhan }}</option>
                                @endforeach
                            </select>
                            @error('berangkat')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <select name="tujuan" class="form-control" id="tujuan" wire:model="tujuan">
                                <option value="">Ke</option>
                                @foreach ($pelabuhan as $plbh)
                                    <option value="{{ $plbh->id }}">{{ $plbh->nama_pelabuhan }}</option>
                                @endforeach
                            </select>
                            @error('tujuan')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="ekonomi" class="form-label">Ekonomi</label>
                            <input type="number" class="form-control" name="ekonomi" id="ekonomi"
                                aria-describedby="helpId" placeholder="0" value="0" wire:model="ekonomi">
                            @error('ekonomi')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="vip" class="form-label">VIP</label>
                            <input type="number" class="form-control" name="vip" id="vip"
                                aria-describedby="helpId" placeholder="0" value="0" wire:model="vip">
                            @error('vip')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="motor" class="form-label">Motor</label>
                            <input type="number" class="form-control" name="motor" id="motor"
                                aria-describedby="helpId" placeholder="0" value="0" wire:model="motor">
                            @error('motor')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mobil" class="form-label">Mobil</label>
                            <input type="number" class="form-control" name="mobil" id="mobil"
                                aria-describedby="helpId" placeholder="0" value="0" wire:model="mobil">
                            @error('mobil')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="truk" class="form-label">Truk</label>
                            <input type="number" class="form-control" name="truk" id="truk"
                                aria-describedby="helpId" placeholder="0" value="0" wire:model="truk">
                            @error('truk')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <button type="submit" wire:click.prevent="cari" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">Daftar Keberangkatan Kapal Ferry</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jadwal
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Berangkat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tiba</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total Harga Tiket</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasilPencarian as $kbr)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">{{ $kbr->kapal->nama_kapal }}</h6>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ session()->get('jadwal') }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ \App\Models\Pelabuhan::find($kbr->berangkat)->nama_pelabuhan }}<br>
                                            {{ $kbr->jam_keberangkatan }} WITA</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ \App\Models\Pelabuhan::find($kbr->tujuan)->nama_pelabuhan }}
                                            <br>{{ $kbr->jam_kedatangan }} WITA
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p>{{ number_format($totalHargaTiket, 0, '.', ',') }}</p>

                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <!-- Button trigger modal -->
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            wire:click.prevent="pesanTiket({{ $kbr->id }})">Pesan</button>

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
