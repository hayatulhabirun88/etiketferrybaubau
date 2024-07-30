<?php

namespace App\Livewire\Kapal;

use App\Models\Kapal;
use Livewire\Component;
use Livewire\WithPagination;

class KapalIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nama_kapal, $jumlah_kursi, $jumlah_mobil, $selectedId;

    public $search = '';

    public $isEdit = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function store()
    {
        $this->validate([
            'nama_kapal' => 'required|string|max:255',
            'jumlah_kursi' => 'required|integer',
            'jumlah_mobil' => 'required|integer',
        ], [
            'nama_kapal.required' => 'Nama kapal harus diisi.',
            'nama_kapal.string' => 'Nama kapal harus berupa teks.',
            'nama_kapal.max' => 'Nama kapal maksimal 255 karakter.',
            'jumlah_kursi.required' => 'Jumlah kursi harus diisi.',
            'jumlah_kursi.integer' => 'Jumlah kursi harus berupa angka.',
            'jumlah_mobil.required' => 'Jumlah mobil harus diisi.',
            'jumlah_mobil.integer' => 'Jumlah mobil harus berupa angka.',
        ]);

        Kapal::create([
            'nama_kapal' => $this->nama_kapal,
            'jumlah_kursi' => $this->jumlah_kursi,
            'jumlah_mobil' => $this->jumlah_mobil,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Ditambahkan.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $kapal = Kapal::find($id);
        $this->selectedId = $id;
        $this->nama_kapal = $kapal->nama_kapal;
        $this->jumlah_kursi = $kapal->jumlah_kursi;
        $this->jumlah_mobil = $kapal->jumlah_mobil;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'nama_kapal' => 'required|string|max:255',
            'jumlah_kursi' => 'required|integer',
            'jumlah_mobil' => 'required|integer',
        ], [
            'nama_kapal.required' => 'Nama kapal harus diisi.',
            'nama_kapal.string' => 'Nama kapal harus berupa teks.',
            'nama_kapal.max' => 'Nama kapal maksimal 255 karakter.',
            'jumlah_kursi.required' => 'Jumlah kursi harus diisi.',
            'jumlah_kursi.integer' => 'Jumlah kursi harus berupa angka.',
            'jumlah_mobil.required' => 'Jumlah mobil harus diisi.',
            'jumlah_mobil.integer' => 'Jumlah mobil harus berupa angka.',
        ]);

        $kapal = Kapal::find($this->selectedId);
        $kapal->update([
            'nama_kapal' => $this->nama_kapal,
            'jumlah_kursi' => $this->jumlah_kursi,
            'jumlah_mobil' => $this->jumlah_mobil,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Diubah.');
        $this->resetTambah();
    }

    public function delete($id)
    {
        Kapal::find($id)->delete();
        session()->flash('success', 'Data Kapal Berhasil Dihapus.');
    }

    public function resetTambah()
    {
        $this->nama_kapal = '';
        $this->jumlah_kursi = '';
        $this->jumlah_mobil = '';
        $this->isEdit = false;
    }

    public function resetForm()
    {
        $this->nama_kapal = '';
        $this->jumlah_kursi = '';
        $this->jumlah_mobil = '';
    }

    public function render()
    {
        $kapals = Kapal::latest()->paginate(5);
        return view('livewire.kapal.kapal-index', compact(['kapals']));
    }
}
