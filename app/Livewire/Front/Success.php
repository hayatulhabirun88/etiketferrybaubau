<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Success extends Component
{
    public function mount()
    {
        if (!session()->has('keberangkatan')) {
            // Jika session 'keberangkatan' ada, tampilkan halaman sukses
            return redirect()->route('front.index');
        }
    }
    public function render()
    {
        return view('livewire.front.success');
    }
}
