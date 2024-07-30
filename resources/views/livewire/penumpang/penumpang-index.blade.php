<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">{{ $isEdit ? 'Ubah Data Penumpang' : 'Tambah Data Penumpang' }}</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" wire:model="nik" placeholder="1234567812345678" class="form-control">
                    @error('nik')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_penumpang" class="form-label">Nama Penumpang</label>
                    <input type="text" wire:model="nama_penumpang" placeholder="John Doe" class="form-control">
                    @error('nama_penumpang')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" wire:model="alamat" placeholder="Baubau" cols="30"
                        rows="3"></textarea>
                    @error('alamat')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="text" wire:model="no_hp" placeholder="081212341234" class="form-control">
                    @error('no_hp')
                        <span style="color:red; font-size:12px;">{{ $message }}</span>
                    @enderror
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
                <h6 class="d-flex">Daftar Penumpang</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Penumpang</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Alamat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No HP</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($penumpang) > 0)
                                @foreach ($penumpang as $pnpng)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $pnpng->nik }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $pnpng->nama_penumpang }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $pnpng->alamat }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $pnpng->no_hp }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-sm btn-warning"
                                                wire:click="edit('{{ $pnpng->id }}')">edit</button>

                                            <button wire:click="delete('{{ $pnpng->id }}')"
                                                class="btn btn-sm btn-danger">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">Tidak Tersedia</td>
                                </tr>

                            @endif

                        </tbody>
                    </table>

                    <div class="card">
                        <div class="card-body">
                            {{ $penumpang->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
