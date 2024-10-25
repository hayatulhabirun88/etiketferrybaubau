<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">{{ $isEdit ? 'Ubah Data Keberangkatan' : 'Tambah Data Keberangkatan' }}</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="jadwal" class="form-label">Nama Kapal</label>
                    <select name="kapal_id" id="kapal_id" class="form-control" wire:model="kapal_id">
                        <option value="">Pilih Kapal</option>
                        @foreach ($kapals as $kapal)
                            <option value="{{ $kapal->id }}">{{ $kapal->nama_kapal }}</option>
                        @endforeach
                    </select>
                    @error('jadwal')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jam_keberangkatan" class="form-label">Jam Berangkat</label>
                            <input type="time" class="form-control" name="jam_keberangkatan" id="jam_keberangkatan"
                                aria-describedby="helpId" placeholder="Jam Berangkat" wire:model="jam_keberangkatan">
                            @error('jam_keberangkatan')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
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
                            <label for="jam_kedatangan" class="form-label">Jam Tiba</label>
                            <input type="time" class="form-control" name="jam_kedatangan" id="jam_kedatangan"
                                aria-describedby="helpId" placeholder="Jumlah Muatan Mobil" wire:model="jam_kedatangan">
                            @error('jam_kedatangan')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
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
                <button type="submit" wire:click.prevent="{{ $isEdit ? 'update' : 'store' }}"
                    class="btn btn-primary">{{ $isEdit ? 'Ubah' : 'Tambah' }}</button>
                @if ($isEdit)
                    <button type="submit" class="btn btn-info" wire:click.prevent="resetTambah">Tambah</button>
                @endif
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jadwal
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Berangkat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Tiba</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($keberangkatan) > 0)
                                @foreach ($keberangkatan as $kbr)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ @$kbr->kapal->nama_kapal }}</h6>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kbr->jadwal }}
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
                                            <button class="btn btn-sm btn-warning"
                                                wire:click="edit('{{ $kbr->id }}')">edit</button>

                                            <button wire:click="delete('{{ $kbr->id }}')"
                                                class="btn btn-sm btn-danger">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">Tidak Tersedia</td>
                                </tr>

                            @endif

                        </tbody>
                    </table>

                    <div class="card">
                        <div class="card-body">
                            {{ $keberangkatan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
