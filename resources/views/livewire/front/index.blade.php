<div>

    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('{{ asset('/') }}depan.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Selamat datang!</h1>
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
                                <h5>Reservasi Tiket Anda</h5>
                            </div>

                            <div class="card-body">
                                <form wire:submit.prevent="cek_jadwal()">
                                    @if (session()->has('error'))
                                        <div class="alert alert-warning" role="alert" style="color:white">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <select name="berangkat" id="berangkat" class="form-control"
                                            wire:model="berangkat">
                                            <option value="">-- Dari Pelabuhan --</option>
                                            @foreach ($pelabuhan as $plbh)
                                                <option value="{{ $plbh->id }}">{{ $plbh->nama_pelabuhan }}</option>
                                            @endforeach
                                        </select>
                                        @error('berangkat')
                                            <span style="color:red; font-size:12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select name="tujuan" id="tujuan" class="form-control" wire:model="tujuan">
                                            <option value="">-- Ke Pelabuhan --</option>
                                            @foreach ($pelabuhan as $plbh)
                                                <option value="{{ $plbh->id }}">{{ $plbh->nama_pelabuhan }}</option>
                                            @endforeach
                                        </select>
                                        @error('tujuan')
                                            <span style="color:red; font-size:12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" placeholder="jadwal"
                                            aria-label="jadwal" aria-describedby="jadwal-addon" wire:model="jadwal">
                                        @error('jadwal')
                                            <span style="color:red; font-size:12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="ekonomi" class="form-label">Ekonomi</label>
                                                <input type="number" class="form-control" name="ekonomi" id="ekonomi"
                                                    aria-describedby="helpId" placeholder="0" value="0"
                                                    wire:model="ekonomi">
                                                @error('ekonomi')
                                                    <span style="color:red; font-size:12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="vip" class="form-label">VIP</label>
                                                <input type="number" class="form-control" name="vip" id="vip"
                                                    aria-describedby="helpId" placeholder="0" value="0"
                                                    wire:model="vip">
                                                @error('vip')
                                                    <span style="color:red; font-size:12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="motor" class="form-label">Motor</label>
                                                <input type="number" class="form-control" name="motor" id="motor"
                                                    aria-describedby="helpId" placeholder="0" value="0"
                                                    wire:model="motor">
                                                @error('motor')
                                                    <span style="color:red; font-size:12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="mobil" class="form-label">Mobil</label>
                                                <input type="number" class="form-control" name="mobil" id="mobil"
                                                    aria-describedby="helpId" placeholder="0" value="0"
                                                    wire:model="mobil">
                                                @error('mobil')
                                                    <span style="color:red; font-size:12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="truk" class="form-label">Truk</label>
                                                <input type="number" class="form-control" name="truk"
                                                    id="truk" aria-describedby="helpId" placeholder="0"
                                                    value="0" wire:model="truk">
                                                @error('truk')
                                                    <span style="color:red; font-size:12px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cari
                                            Pelayaran</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($hasilPencarian)
            <section class="mb-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8" style="margin:0 auto;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Keberangkatan</h5>
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jadwal
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
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
                                                                <h6 class="mb-0 text-sm">{{ $kbr->kapal->nama_kapal }}
                                                                </h6>
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
                </div>
            </section>

        @endif

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
