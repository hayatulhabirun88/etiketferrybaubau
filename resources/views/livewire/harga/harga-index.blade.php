<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 class="d-flex">{{ $isEdit ? 'Ubah Harga Tiket' : 'Tambah Harga Tiket' }}</h6>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="vip" class="form-label">VIP</label>
                            <input type="text" class="form-control" name="vip" id="vip"
                                aria-describedby="helpId" placeholder="Harga Tiket VIP" wire:model="vip" tabindex="1">
                            @error('vip')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ekonomi" class="form-label">Ekonomi</label>
                            <input type="text" class="form-control" name="ekonomi" id="ekonomi"
                                aria-describedby="helpId" placeholder="Harga Tiket Ekonomi" wire:model="ekonomi"
                                tabindex="2">
                            @error('ekonomi')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="motor" class="form-label">Motor</label>
                            <input type="text" class="form-control" name="motor" id="motor"
                                aria-describedby="helpId" placeholder="Harga Tiket Motor" wire:model="motor"
                                tabindex="3">
                            @error('motor')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mobil" class="form-label">Mobil</label>
                            <input type="text" class="form-control" name="mobil" id="mobil"
                                aria-describedby="helpId" placeholder="Harga Tiket Mobil" wire:model="mobil"
                                tabindex="4">
                            @error('mobil')
                                <span style="color:red; font-size:12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="truk" class="form-label">Truk</label>
                            <input type="text" class="form-control" name="truk" id="truk"
                                aria-describedby="helpId" placeholder="Harga Tiket truk" wire:model="truk"
                                tabindex="5">
                            @error('truk')
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
                <h6 class="d-flex">Daftar Harga Tiket</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    VIP
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    EKONOMI</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    MOTOR</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    MOBIL</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    TRUK</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($hargas) > 0)
                                @foreach ($hargas as $harga)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Rp.
                                                        {{ number_format($harga->vip, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Rp.
                                                        {{ number_format($harga->ekonomi, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Rp.
                                                        {{ number_format($harga->motor, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Rp.
                                                        {{ number_format($harga->mobil_standar, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">Rp.
                                                        {{ number_format($harga->mobil_truk, 0, '.', ',') }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button class="btn btn-sm btn-warning"
                                                wire:click="edit('{{ $harga->id }}')">edit</button>

                                            <button wire:click="delete('{{ $harga->id }}')"
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
                            {{ $hargas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
