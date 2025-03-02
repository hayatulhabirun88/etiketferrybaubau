<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Mail\TiketMail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Picqer\Barcode\BarcodeGeneratorPNG;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function pesan_tiket()
    {

        return view('front.pesan_tiket');
    }

    public function tiket_list()
    {
        return view('front.tiket_list');
    }

    public function pending()
    {
        return view('front.pending');
    }

    public function success()
    {
        return view('front.success');
    }

    public function cetak($id)
    {
        $tiket = Tiket::find($id);
        return view('tiket.cetak', compact('tiket'));
    }
    public function email($id)
    {
        $tiket = Tiket::findOrFail($id);

        // Generate barcode PNG
        $generator = new BarcodeGeneratorPNG();
        $barcode = base64_encode($generator->getBarcode($tiket->kode_tiket, $generator::TYPE_CODE_128));


        $pdf = Pdf::loadView('tiket.pdf', compact(['tiket', 'barcode']));
        return $pdf->download('datatiket.pdf');

        // 

        // // Kirim email ke penumpang
        // Mail::to($tiket->penumpang->user->email)->send(new TiketMail($tiket));

        // // Redirect dengan pesan sukses
        // return redirect()->back()->with('success', 'Tiket berhasil dikirim ke email!');
    }

}
