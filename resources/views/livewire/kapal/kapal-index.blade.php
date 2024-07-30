<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">{{ $isEdit ? 'Ubah Data Kapal' : 'Tambah Data Kapal' }}</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="nama_kapal" class="form-label">Nama Kapal</label>
                    <input type="text" class="form-control" name="nama_kapal" id="nama_kapal"
                        aria-describedby="helpId" placeholder="Nama Kapal" wire:model="nama_kapal">
                    @error('nama_kapal')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                            <input type="text" class="form-control" name="jumlah_kursi" id="jumlah_kursi"
                                aria-describedby="helpId" placeholder="Jumlah Muatan Kursi" wire:model="jumlah_kursi">
                            @error('jumlah_kursi')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jumlah_mobil" class="form-label">Jumlah Mobil</label>
                            <input type="text" class="form-control" name="jumlah_mobil" id="jumlah_mobil"
                                aria-describedby="helpId" placeholder="Jumlah Muatan Mobil" wire:model="jumlah_mobil">
                            @error('jumlah_mobil')
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
                <h6 class="d-flex">Daftar Kapal</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    Kapal
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jumlah Kursi</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah Mobil</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($kapals) > 0)
                                @foreach ($kapals as $kapal)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $kapal->nama_kapal }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $kapal->jumlah_kursi }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $kapal->jumlah_mobil }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-sm btn-warning"
                                                wire:click="edit('{{ $kapal->id }}')">edit</button>

                                            <button wire:click="delete('{{ $kapal->id }}')"
                                                class="btn btn-sm btn-danger">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">Tidak Tersedia</td>
                                </tr>

                            @endif

                        </tbody>
                    </table>

                    <div class="card">
                        <div class="card-body">
                            {{ $kapals->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
