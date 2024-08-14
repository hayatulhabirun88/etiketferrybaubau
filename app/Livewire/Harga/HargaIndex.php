<?php

namespace App\Livewire\Harga;

use App\Models\Harga;
use Livewire\Component;
use Livewire\WithPagination;

class HargaIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $vip, $ekonomi, $mobil, $truk, $motor, $selectedId;

    public $search = '';

    public $isEdit = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function store()
    {

        $this->validate([
            'vip' => 'required',
            'ekonomi' => 'required',
            'mobil' => 'required',
            'truk' => 'required',
            'motor' => 'required',
        ], [
            'vip.required' => 'Harga tiket VIP harus diisi.',
            'ekonomi.required' => 'Harga tiket ekonomi harus diisi.',
            'mobil.required' => 'Harga tiket mobil harus diisi.',
            'truk.required' => 'Harga tiket truk harus diisi.',
            'motor.required' => 'Harga tiket truk harus diisi.',
        ]);

        $vip = preg_replace("/[^0-9]/", "", $this->vip);
        $ekonomi = preg_replace("/[^0-9]/", "", $this->ekonomi);
        $mobil = preg_replace("/[^0-9]/", "", $this->mobil);
        $truk = preg_replace("/[^0-9]/", "", $this->truk);
        $motor = preg_replace("/[^0-9]/", "", $this->motor);

        Harga::create([
            'vip' => $vip,
            'ekonomi' => $ekonomi,
            'mobil_standar' => $mobil,
            'mobil_truk' => $truk,
            'motor' => $motor,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Ditambahkan.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $harga = Harga::find($id);
        $this->selectedId = $id;
        $this->vip = number_format($harga->vip, 0, '.', ',');
        $this->ekonomi = number_format($harga->ekonomi, 0, '.', ',');
        $this->mobil = number_format($harga->mobil_standar, 0, '.', ',');
        $this->truk = number_format($harga->mobil_truk, 0, '.', ',');
        $this->motor = number_format($harga->motor, 0, '.', ',');
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'vip' => 'required',
            'ekonomi' => 'required',
            'mobil' => 'required',
            'truk' => 'required',
            'motor' => 'required',
        ], [
            'vip.required' => 'Harga tiket VIP harus diisi.',
            'ekonomi.required' => 'Harga tiket ekonomi harus diisi.',
            'mobil.required' => 'Harga tiket mobil harus diisi.',
            'truk.required' => 'Harga tiket truk harus diisi.',
            'motor.required' => 'Harga tiket truk harus diisi.',
        ]);

        $harga = Harga::find($this->selectedId);

        $vip = preg_replace("/[^0-9]/", "", $this->vip);
        $ekonomi = preg_replace("/[^0-9]/", "", $this->ekonomi);
        $mobil = preg_replace("/[^0-9]/", "", $this->mobil);
        $truk = preg_replace("/[^0-9]/", "", $this->truk);
        $motor = preg_replace("/[^0-9]/", "", $this->motor);

        $harga->update([
            'vip' => $vip,
            'ekonomi' => $ekonomi,
            'mobil_standar' => $mobil,
            'mobil_truk' => $truk,
            'motor' => $motor,
        ]);

        session()->flash('success', 'Data Kapal Berhasil Diubah.');
        $this->resetTambah();
    }

    public function delete($id)
    {
        Harga::find($id)->delete();
        session()->flash('success', 'Data Kapal Berhasil Dihapus.');
    }

    public function resetTambah()
    {
        $this->vip = '';
        $this->ekonomi = '';
        $this->mobil = '';
        $this->truk = '';
        $this->motor = '';
        $this->isEdit = false;
    }

    public function resetForm()
    {
        $this->vip = '';
        $this->ekonomi = '';
        $this->mobil = '';
        $this->truk = '';
        $this->motor = '';
    }
    public function render()
    {
        $hargas = Harga::latest()->paginate(10);
        return view('livewire.harga.harga-index', compact(['hargas']));
    }
}
