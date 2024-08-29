<?php

namespace App\Livewire\Tiket;

use App\Models\Tiket;
use App\Models\History;
use Livewire\Component;
use App\Models\Penumpang;

class PesanTiket extends Component
{
    public $nik, $nama_penumpang, $alamat, $no_hp, $user_id, $selectedId, $jadwal, $berangkat, $tujuan, $totalHargaTiket, $ekonomi, $vip, $motor, $mobil, $truk, $plat_no;

    public function prosesTiket()
    {
        $this->validate([
            'nik' => 'required|numeric|digits:16',
            'nama_penumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_hp' => 'required|numeric',
        ]);

        if (session()->get('motor') > 0 || session()->get('mobile') > 0 || session()->get('truk') > 0) {
            $this->validate([
                'plat_no' => 'required|string|max:10',
            ]);
        }

        $kodeTiket = time() . rand(000, 999);

        if ($this->ekonomi > 0) {
            $fasilitas = 'ekonomi';
        } else {
            $fasilitas = 'vip';
        }

        if (session()->get('motor') > 0) {
            $kendaraan = 'motor';
        } else if (session()->get('mobil') > 0) {
            $kendaraan = 'mobil';
        } elseif (session()->get('truk') > 0) {
            $kendaraan = "truk";
        } else {
            $kendaraan = "";
        }

        $penumpang = Penumpang::updateOrCreate(
            ['nik' => $this->nik],
            [
                'nama_penumpang' => $this->nama_penumpang,
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'user_id' => NULL,
            ]
        );

        $tiket = Tiket::create([
            'kode_tiket' => $kodeTiket,
            'harga_tiket' => session()->get('total_harga'),
            'fasilitas' => $fasilitas,
            'kendaraan' => $kendaraan,
            'plat' => $this->plat_no,
            'penumpang_id' => $penumpang->id,
            'keberangkatan_id' => session()->get('keberangkatan')['id']
        ]);

        History::create([
            'tiket_id' => $tiket->id,
            'jenis_pembayaran' => 'tunai',
            'metode_pembayaran' => 'manual',
            'bukti_pembayaran' => NULL,
        ]);

        return redirect()->route('tiket.list');

    }

    public function render()
    {
        return view('livewire.tiket.pesan-tiket');
    }
}
