<?php

namespace App\Livewire\Front;

use Carbon\Carbon;
use App\Models\Harga;
use Livewire\Component;
use App\Models\Pelabuhan;
use App\Models\Keberangkatan;

class Index extends Component
{
    public $jadwal, $berangkat, $tujuan, $vip, $ekonomi, $motor, $mobil, $truk, $totalHargaTiket;
    public $hasilPencarian = [];

    public function cek_jadwal()
    {
        $this->validate([
            'jadwal' => 'required|date|after_or_equal:' . Carbon::now()->subDay()->toDateTimeString(),
            'vip' => 'min:0',
            'ekonomi' => 'min:0',
            'motor' => 'min:0',
            'mobil' => 'min:0',
            'truk' => 'min:0',
            'berangkat' => 'required',
            'tujuan' => 'required',
        ], [
            'vip.min' => 'Jumlah VIP tidak boleh kurang dari 0.',
            'ekonomi.min' => 'Jumlah Ekonomi tidak boleh kurang dari 0.',
            'motor.min' => 'Jumlah Motor tidak boleh kurang dari 0.',
            'mobil.min' => 'Jumlah Mobil tidak boleh kurang dari 0.',
            'truk.min' => 'Jumlah Truk tidak boleh kurang dari 0.',
            'berangkat.required' => 'Pelabuhan berangkat harus diisi.',
            'tujuan.required' => 'Pelabuhan tujuan harus diisi.',
            'jadwal.required' => 'Jadwal keberangkatan harus diisi.',
            'jadwal.date' => 'Jadwal harus berupa format tanggal yang valid.',
            'jadwal.after_or_equal' => 'Jadwal harus lebih atau sama dengan tanggal dan waktu satu hari yang lalu.',
        ]);

        if ($this->vip < 0 || $this->ekonomi < 0 || $this->motor < 0 || $this->mobil < 0 || $this->truk < 0) {
            session()->flash('error', 'Jumlah Tiket tidak boleh kurang dari 0.');
            return;
        }
        $this->hasilPencarian = Keberangkatan::query()
            ->where(function ($query) {
                $query->where('berangkat', $this->berangkat)
                    ->where('tujuan', $this->tujuan);
            })
            ->whereTime('jam_keberangkatan', '>', Carbon::now()->format('H:i:s'))  // Compare only the time part using Carbon
            ->orderBy('jam_keberangkatan', 'asc')  // Order by the time of departure (ascending)
            ->get();

        session()->put('jadwal', $this->jadwal);

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

    public function pesanTiket($id)
    {
        $this->resetSesssion();

        $keberangkatan = Keberangkatan::findOrFail($id);
        $properties = ['ekonomi', 'vip', 'motor', 'mobil', 'truk'];

        foreach ($properties as $property) {
            if ($this->$property > 0) {
                session()->put($property, $this->$property);
            }
        }

        session()->put('keberangkatan', $keberangkatan);
        session()->put('total_harga', $this->totalHargaTiket);

        return redirect()->route('front.pesan_tiket');

    }

    public function resetSesssion()
    {
        session()->forget('ekonomi');
        session()->forget('vip');
        session()->forget('motor');
        session()->forget('mobil');
        session()->forget('truk');
        session()->forget('keberangkatan');
        session()->forget('total_harga');
    }
    public function render()
    {
        $pelabuhan = Pelabuhan::all();
        return view('livewire.front.index', compact(['pelabuhan']));
    }
}
