<?php

namespace App\Livewire\Keberangkatan;

use App\Models\Kapal;
use Livewire\Component;
use App\Models\Pelabuhan;
use Livewire\WithPagination;
use App\Models\Keberangkatan;

class KeberangkatanIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $jadwal, $jam_keberangkatan, $jam_kedatangan, $berangkat, $tujuan, $kapal_id, $nama_kapal, $selectedId;

    public $search = '';

    public $isEdit = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function store()
    {

        $this->validate([
            'jadwal' => 'required',
            'jam_keberangkatan' => 'required',
            'jam_kedatangan' => 'required',
            'berangkat' => 'required|string',
            'tujuan' => 'required|string',
            'kapal_id' => 'required|integer',
        ], [
            'jadwal.required' => 'Jadwal harus diisi.',
            'jam_keberangkatan.required' => 'Jam keberangkatan harus diisi.',
            'jam_kedatangan.required' => 'Jam kedatangan harus diisi.',
            'berangkat.required' => 'Berangkat harus diisi.',
            'berangkat.string' => 'Berangkat harus berupa teks.',
            'tujuan.required' => 'Tujuan harus diisi.',
            'tujuan.string' => 'Tujuan harus berupa teks.',
            'kapal_id.required' => 'Nama Kapal harus diisi.',
            'kapal_id.integer' => 'Nama Kapal terjadi kesalahan.',
        ]);

        Keberangkatan::create([
            'jadwal' => $this->jadwal,
            'jam_keberangkatan' => $this->jam_keberangkatan,
            'jam_kedatangan' => $this->jam_kedatangan,
            'berangkat' => $this->berangkat,
            'tujuan' => $this->tujuan,
            'kapal_id' => $this->kapal_id,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Ditambahkan.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $keberangkatan = Keberangkatan::find($id);
        $this->selectedId = $id;
        $this->jadwal = $keberangkatan->jadwal;
        $this->jam_keberangkatan = $keberangkatan->jam_keberangkatan;
        $this->jam_kedatangan = $keberangkatan->jam_kedatangan;
        $this->berangkat = $keberangkatan->berangkat;
        $this->tujuan = $keberangkatan->tujuan;
        $this->kapal_id = $keberangkatan->kapal_id;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'jadwal' => 'required',
            'jam_keberangkatan' => 'required',
            'jam_kedatangan' => 'required',
            'berangkat' => 'required|string',
            'tujuan' => 'required|string',
            'kapal_id' => 'required|integer',
        ], [
            'jadwal.required' => 'Jadwal harus diisi.',
            'jam_keberangkatan.required' => 'Jam keberangkatan harus diisi.',
            'jam_kedatangan.required' => 'Jam kedatangan harus diisi.',
            'berangkat.required' => 'Berangkat harus diisi.',
            'berangkat.string' => 'Berangkat harus berupa teks.',
            'tujuan.required' => 'Tujuan harus diisi.',
            'tujuan.string' => 'Tujuan harus berupa teks.',
            'kapal_id.required' => 'Nama Kapal harus diisi.',
            'kapal_id.integer' => 'Nama Kapal terjadi kesalahan.',
        ]);

        $kapal = Keberangkatan::find($this->selectedId);
        $kapal->update([
            'jadwal' => $this->jadwal,
            'jam_keberangkatan' => $this->jam_keberangkatan,
            'jam_kedatangan' => $this->jam_kedatangan,
            'berangkat' => $this->berangkat,
            'tujuan' => $this->tujuan,
            'kapal_id' => $this->kapal_id,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Diubah.');
        $this->resetTambah();
    }

    public function delete($id)
    {
        Keberangkatan::find($id)->delete();
        session()->flash('success', 'Data Kapal Berhasil Dihapus.');
    }

    public function resetTambah()
    {
        $this->jadwal = '';
        $this->jam_keberangkatan = '';
        $this->jam_kedatangan = '';
        $this->berangkat = '';
        $this->tujuan = '';
        $this->kapal_id = '';
        $this->isEdit = false;
    }

    public function resetForm()
    {
        $this->jadwal = '';
        $this->jam_keberangkatan = '';
        $this->jam_kedatangan = '';
        $this->berangkat = '';
        $this->tujuan = '';
        $this->kapal_id = '';
    }

    public function render()
    {
        $keberangkatan = Keberangkatan::latest()->paginate(10);
        $kapals = Kapal::all();
        $pelabuhan = Pelabuhan::all();
        return view('livewire.keberangkatan.keberangkatan-index', compact(['keberangkatan', 'kapals', 'pelabuhan']));
    }
}
