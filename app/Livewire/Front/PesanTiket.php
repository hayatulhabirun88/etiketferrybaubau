<?php

namespace App\Livewire\Front;

use App\Models\User;
use App\Models\Tiket;
use App\Models\History;
use Livewire\Component;
use App\Models\Penumpang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PesanTiket extends Component
{
    public $nik, $nama_penumpang, $alamat, $no_hp, $selectedId, $jadwal, $berangkat, $tujuan, $totalHargaTiket, $ekonomi, $vip, $motor, $mobil, $truk, $plat_no, $email, $password;
    public function prosesTiket()
    {

        $this->validate([
            'nik' => 'required|numeric|digits:16',
            'email' => 'required|email|max:255',
            'nama_penumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_hp' => 'required|numeric',
            'password' => 'required'
        ], [
            'nik.required' => 'NIK harus diisi.',
            'nik.numeric' => 'NIK harus berupa angka.',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'nama_penumpang.required' => 'Nama penumpang harus diisi.',
            'nama_penumpang.string' => 'Nama penumpang harus berupa teks.',
            'nama_penumpang.max' => 'Nama penumpang tidak boleh lebih dari 255 karakter.',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat tidak boleh lebih dari 500 karakter.',
            'no_hp.required' => 'Nomor HP harus diisi.',
            'no_hp.numeric' => 'Nomor HP harus berupa angka.',
            'password.required' => 'Password harus diisi.',
        ]);

        if (session()->get('motor') > 0 || session()->get('mobile') > 0 || session()->get('truk') > 0) {
            $this->validate([
                'plat_no' => 'required|string|max:10',
            ]);
        }

        $kodeTiket = time() . rand(000, 999);

        if (session()->get('ekonomi') > 0) {
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

        $user = User::updateOrCreate([
            'email' => $this->email,
        ], [
            'password' => Hash::make($this->password),
            'level' => 'member',
        ]);

        $penumpang = Penumpang::updateOrCreate(
            ['nik' => $this->nik],
            [
                'nama_penumpang' => $this->nama_penumpang,
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'user_id' => $user->id,
            ]
        );

        $tiket = Tiket::create([
            'kode_tiket' => $kodeTiket,
            'jadwal' => session()->get('jadwal'),
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

        Session::put('user', $user);
        Session::put('penumpang', $penumpang);
        Session::put('tiket', $tiket);

        return redirect()->route('front.tiket_list');
    }
    public function render()
    {
        return view('livewire.front.pesan-tiket');
    }
}
