<?php

namespace App\Livewire\Front;

use App\Models\Tiket;
use App\Mail\TiketMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Success extends Component
{

    public function mount()
    {
        if (!session()->has('keberangkatan')) {
            // Jika session 'keberangkatan' ada, tampilkan halaman sukses
            return redirect()->route('front.index');
        }
    }

    public function kirimTiket($id)
    {
        $tiket = Tiket::findOrFail($id);

        try {
            // Kirim email ke penumpang
            Mail::to($tiket->penumpang->user->email)->send(new TiketMail($tiket));
            // Redirect dengan pesan sukses
            session()->flash('success', 'Dokumen tiket berhasil di kirim');
        } catch (\Throwable $th) {
            session()->flash('error', $th);
        }

    }

    public function render()
    {
        return view('livewire.front.success');
    }
}
