<?php

namespace App\Livewire\Tiket;

use App\Models\Tiket;
use Livewire\Component;
use Livewire\WithPagination;

class TiketList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $kodeTiket, $harga_tiket, $fasilitas, $kendaraan;

    public function render()
    {
        $tiket = Tiket::latest()->paginate(10);
        return view('livewire.tiket.tiket-list', compact('tiket'));
    }
}
