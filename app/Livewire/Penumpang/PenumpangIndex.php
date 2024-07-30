<?php

namespace App\Livewire\Penumpang;

use Livewire\Component;
use App\Models\Penumpang;
use Livewire\WithPagination;

class PenumpangIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nik, $nama_penumpang, $alamat, $no_hp, $user_id, $selectedId;

    public $search = '';

    public $isEdit = false;

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

        Penumpang::create([
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
        $penumpang = Penumpang::find($id);
        $this->selectedId = $id;
        $this->nik = $penumpang->nik;
        $this->nama_penumpang = $penumpang->nama_penumpang;
        $this->alamat = $penumpang->alamat;
        $this->no_hp = $penumpang->no_hp;
        $this->user_id = $penumpang->user_id;
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

        $kapal = Penumpang::find($this->selectedId);
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
        Penumpang::find($id)->delete();
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
    public function render()
    {
        $penumpang = Penumpang::latest()->paginate();
        return view('livewire.penumpang.penumpang-index', compact(['penumpang']));
    }
}
