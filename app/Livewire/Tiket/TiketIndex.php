<?php

namespace App\Livewire\Tiket;

use App\Models\Harga;
use App\Models\Tiket;
use Livewire\Component;
use App\Models\Pelabuhan;
use Livewire\WithPagination;
use App\Models\Keberangkatan;

class TiketIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nik, $nama_penumpang, $alamat, $no_hp, $user_id, $selectedId, $jadwal, $berangkat, $tujuan, $totalHargaTiket, $ekonomi, $vip, $motor, $mobil, $truk;

    public $search = '';

    public $isEdit = false;
    public $openJadwal = false;

    public $hasilPencarian = [];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function store()
    {

        $this->validate([
            'nik' => 'required|numeric|digits:16|unique:penumpangs,nik',
            'nama_penumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_hp' => 'required|string|regex:/^08\d{8,11}$/',
            'user_id' => 'nullable|exists:users,id',
        ], [
            'nik.required' => 'NIK harus diisi.',
            'nik.numeric' => 'NIK harus berupa angka.',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'nama_penumpang.required' => 'Nama penumpang harus diisi.',
            'nama_penumpang.string' => 'Nama penumpang harus berupa teks.',
            'nama_penumpang.max' => 'Nama penumpang maksimal 255 karakter.',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal 500 karakter.',
            'no_hp.required' => 'No HP harus diisi.',
            'no_hp.string' => 'No HP harus berupa teks.',
            'no_hp.regex' => 'No HP harus berupa nomor valid dengan format 08xxxxxx.',
        ]);

        Tiket::create([
            'nik' => $this->nik,
            'nama_penumpang' => $this->nama_penumpang,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'user_id' => NULL,
        ]);

        session()->flash('success', 'Data Penumpang berhasil disimpan.');
        $this->reset();
    }

    public function edit($id)
    {
        $tiket = Tiket::find($id);
        $this->selectedId = $id;
        $this->nik = $tiket->nik;
        $this->nama_tiket = $tiket->nama_tiket;
        $this->alamat = $tiket->alamat;
        $this->no_hp = $tiket->no_hp;
        $this->user_id = $tiket->user_id;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'nik' => 'required|numeric|digits:16|unique:penumpangs,nik,' . $this->selectedId,
            'nama_penumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_hp' => 'required|string|regex:/^08\d{8,11}$/',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $kapal = Tiket::find($this->selectedId);
        $kapal->update([
            'nik' => $this->nik,
            'nama_penumpang' => $this->nama_penumpang,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'user_id' => $this->user_id,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Diubah.');
        $this->resetTambah();
    }

    public function delete($id)
    {
        Tiket::find($id)->delete();
        session()->flash('success', 'Data Kapal Berhasil Dihapus.');
    }

    public function resetTambah()
    {
        $this->nik = '';
        $this->nama_penumpang = '';
        $this->alamat = '';
        $this->no_hp = '';
        $this->user_id = '';
        $this->isEdit = false;
    }

    public function resetForm()
    {
        $this->nik = '';
        $this->nama_penumpang = '';
        $this->alamat = '';
        $this->no_hp = '';
        $this->user_id = '';
    }

    public function cari()
    {
        $this->validate([
            'vip' => 'min:0',
            'ekonomi' => 'min:0',
            'motor' => 'min:0',
            'mobil' => 'min:0',
            'truk' => 'min:0',
        ]);


        $this->openJadwal = true;
        $this->hasilPencarian = Keberangkatan::query()
            ->where('jadwal', 'like', '%' . $this->jadwal . '%')
            ->where(function ($query) {
                $query->where('berangkat', $this->berangkat)
                    ->where('tujuan', $this->tujuan);
            })
            ->latest()
            ->get();

        $harga = Harga::first();
        $this->ekonomi = $this->ekonomi ?? 0;
        $this->vip = $this->vip ?? 0;
        $this->motor = $this->motor ?? 0;
        $this->mobil = $this->mobil ?? 0;
        $this->truk = $this->truk ?? 0;

        // Menghitung total harga tiket
        $this->totalHargaTiket =
            ($this->ekonomi * $harga->ekonomi) +
            ($this->vip * $harga->vip) +
            ($this->motor * $harga->motor) +
            ($this->mobil * $harga->mobil_standar) +
            ($this->truk * $harga->mobil_truk);

    }

    public function pesan($id)
    {
        $keberangkatan = Keberangkatan::find($id);
        dd($keberangkatan);
    }

    public function render()
    {
        $tiket = Tiket::latest()->paginate(10);
        $pelabuhan = Pelabuhan::all();
        return view('livewire.tiket.tiket-index', compact(['tiket', 'pelabuhan']));
    }
}
