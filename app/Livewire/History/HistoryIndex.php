<?php

namespace App\Livewire\History;

use App\Models\History;
use Livewire\Component;
use Livewire\WithPagination;

class HistoryIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nik, $nama_penumpang, $alamat, $no_hp, $user_id, $selectedId, $jadwal, $berangkat, $tujuan, $totalHargaTiket, $ekonomi, $vip, $motor, $mobil, $truk, $plat_no;

    public $search = '';

    public $isEdit = false;
    public $openJadwal = false;

    public $hasilPencarian = [];

    public function render()
    {
        $history = History::latest()->paginate(10);
        return view('livewire.history.history-index', compact('history'));
    }
}
