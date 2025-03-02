<?php

namespace App\Mail;

use App\Models\Tiket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Illuminate\Contracts\Queue\ShouldQueue;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TiketMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $tiket;

    public function __construct(Tiket $tiket)
    {
        $this->tiket = $tiket;
    }

    public function build()
    {
        // Generate barcode PNG
        $generator = new BarcodeGeneratorPNG();
        $barcode = base64_encode($generator->getBarcode($this->tiket->kode_tiket, $generator::TYPE_CODE_128));


        $pdf = Pdf::loadView('tiket.pdf', ['tiket' => $this->tiket, 'barcode' => $barcode]);

        return $this->subject('Tiket Anda')
            ->view('tiket.email')
            ->attachData($pdf->output(), 'tiket.pdf', [
                'mime' => 'application/pdf',
            ]);
    }

}
