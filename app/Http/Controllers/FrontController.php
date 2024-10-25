<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

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
}
