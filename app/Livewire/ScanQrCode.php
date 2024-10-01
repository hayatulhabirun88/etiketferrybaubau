<?php

namespace App\Livewire;

use Livewire\Component;

class ScanQrCode extends Component
{
    public $qrData;

    protected $listeners = ['processQrCode'];

    public function processQrCode($qrCodeData)
    {
        $this->qrData = $qrCodeData;

        // Proses data QR code di sini, seperti mencari data di database
        // Contoh: 
        // $user = User::where('qr_code', $qrCodeData)->first();
    }

    public function render()
    {
        return view('livewire.scan-qr-code');
    }
}
