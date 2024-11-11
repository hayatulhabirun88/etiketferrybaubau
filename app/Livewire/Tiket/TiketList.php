<?php

namespace App\Livewire\Tiket;

use App\Models\Tiket;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class TiketList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $kodeTiket, $harga_tiket, $fasilitas, $kendaraan;

    public function render()
    {
        if (auth()->user()->level == "member") {
            $tiket = Tiket::whereHas('penumpang', function ($q) {
                $q->where('user_id', auth()->user()->id);
            })->latest()->paginate();
        } else {
            $tiket = Tiket::latest()->paginate();
        }

        return view('livewire.tiket.tiket-list', compact('tiket'));
    }
}
